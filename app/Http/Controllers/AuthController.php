<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // metodo para login
    public function login ()
    {
        return view('login');
    }

    // metodo loginSubmit
    public function loginSubmit (Request $request)
    {
        echo $request->input('text_username');
        echo '<br/>';
        echo $request->input('text_password');
    }

    // metodo para logout
    public function logout ()
    {
        echo 'Logout';
    }

}
