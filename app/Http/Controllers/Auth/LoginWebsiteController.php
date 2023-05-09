<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\ValidationException;

class LoginWebsiteController extends Controller

{
    
    public function create() 

    {

        return view('website.login');

    }

    public function store(Request $request) 

    {

        $attribute = $request->validate([

            'email' => ['required', 'email'],

            'password' => ['required']

        ]);

        if (Auth::attempt($attribute))
        
        {
            return redirect('/');
        }

        throw ValidationException::withMessages([

            'email' => 'Your provide credentials does not match our records.',

        ]);

    }

}
