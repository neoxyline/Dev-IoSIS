<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;

use App\Models\Users\User;

use Ramsey\Uuid\Uuid;

class DaftarController extends Controller
{
    
    public function create() {

        return view('website.daftar');

    }

    /**
     * Daftar dengan Google
     */

    public function redirectToGoogle() {

        return Socialite::driver('google')->redirect();

    }

    public function handleGoogleCallback() {

        $googleUser = Socialite::driver('google')->user();

        $authUser = User::where('email', $googleUser->email)->first();

        if ($authUser) {

            return redirect()->route('daftar')->withErrors(['google' => 'Email Google telah digunakan !']);

        }

        User::create([

            'name' => $googleUser->name,

            'uuid' => Uuid::uuid4()->toString(),

            'google_id' => $googleUser->id,
            
            'email' => $googleUser->email,

            'password' => '',
            
            'user_type' => json_encode(['pelanggan']),

            'email_verified_at' => now(),

        ]);

        return redirect()->route('beranda');

    }

    /**
     * Daftar dengan e-mail atau nomor HP
     */

    public function storeRedirectToVerifikasi(Request $request) {

        $input = $request->input('email_or_nomor_hp');

        $isEmail = $this->validateEmail($input);

        $isNomorHp = $this->validatePhoneNumber($input);

        $data = [];

        if ($isEmail || $isNomorHp) {

            if ($isEmail) {

                $data = [
                    'jenisVerifikasi' => 'email',
                    'input' => $input,
                ];

            } else if ($isNomorHp) {

                $data = [
                    'jenisVerifikasi' => 'nomorHp',
                    'input' => $input,
                ];

            } else {

                return redirect()->route('daftar');

            }

        }

        return redirect()->route('daftar-verifikasi')->with($data);

    }

    private function validatePhoneNumber($phoneNumber) {
        $regex = '/^\d{7,}$/'; // Angka minimal 7 karakter
        return preg_match($regex, $phoneNumber);
    }

    private function validateEmail($email) {
        $regex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/'; // Format email standar
        return preg_match($regex, $email);
    }

}
