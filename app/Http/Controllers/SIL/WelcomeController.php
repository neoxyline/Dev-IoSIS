<?php

namespace App\Http\Controllers\SIL;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WelcomeController extends Controller

{
    
    public function index()

    {

        return view('SIL.welcome');

    }

}
