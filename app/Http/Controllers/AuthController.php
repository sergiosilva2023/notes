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
        // $dd($request);
        // form validation
        $request->validate(
            [
                'text_username' => 'required|',
                'text_password' => 'required'
            ]
        );

        // get user input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        echo 'Ok!';
    }

    // metodo para logout
    public function logout ()
    {
        echo 'Logout';
    }

}
