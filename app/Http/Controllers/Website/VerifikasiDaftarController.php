<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\EmailVerifikasi;

use App\Models\Users\User_verification;

class VerifikasiDaftarController extends Controller
{

    public function index(Request $request) {

        if (Session::get('jenisVerifikasi') == NULL || Session::get('input') == NULL) {

            return redirect()->route('daftar');

        }

        $this->checkExpireVerifies();

        $data = [
            'jenisVerifikasi' => Session::get('jenisVerifikasi'),
            'kirimKe' => Session::get('input'),
        ];

        return view('website.verifikasiDaftar', $data);

    }

    public function sendVerificationCodeToEmail(Request $request) {

        $email = $request->input('email');

        $token = rand(100000, 999999);

        $data = [
            'emailOrNomorHp' => $email, 
            'jenisVerifikasi' => 'email', 
        ];

        if ($email == NULL) {

            return redirect()->route('daftar');

        }

        $checkEmail = User_verification::where('email_or_nomor_hp', $email)->first();

        if ($checkEmail) {

            $checkEmailExpired = User_verification::where('email_or_nomor_hp', $email)
                ->where('expired_at', '>', now('Asia/Kuala_Lumpur'))
                ->first();

            if (!$checkEmailExpired) {

                $checkEmail->delete();

                return redirect()->route('daftar');

            }

            $this->checkExpireVerifies();

            // return view('website.konfirmasiVerifikasiDaftar', $data);

            return redirect()->route('daftar-verifikasi-email')->with($data);

        } else {

            $this->checkExpireVerifies();

            $verification = User_verification::create([
                'email_or_nomor_hp' => $email,
                'token' => $token,
                'expired_at' => now('Asia/Kuala_Lumpur')->addMinutes(10),
            ]);

            $mailData = [
                'code' => $token,
            ];
    
            Mail::to($email)->send(new EmailVerifikasi($mailData));
    
            // return view('website.konfirmasiVerifikasiDaftar', $data);

            return redirect()->route('daftar-verifikasi-email')->with($data);

        }

    }

    public function konfirmVerificationCode(Request $request) {

        // 'emailOrNomorHp' => $email, 
        // 'jenisVerifikasi' => 'email', 

        if (Session::get('emailOrNomorHp') == NULL || Session::get('jenisVerifikasi') == NULL) {

            return redirect()->route('daftar');

        }

        $data = [
            'emailOrNomorHp' => Session::get('emailOrNomorHp'), 
            'jenisVerifikasi' => Session::get('jenisVerifikasi'), 
        ];

        return view('website.konfirmasiVerifikasiDaftar', $data);

    }

    private function checkExpireVerifies() {

        $checkExpireVerifies = User_verification::where('expired_at', '<', now('Asia/Kuala_Lumpur'))->get();

        foreach ($checkExpireVerifies as $model) {

            $model->delete();

        }

    }

}
