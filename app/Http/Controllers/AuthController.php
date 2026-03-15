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
                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:16'
            ],
            // error messages
            [
                'text_username.required' => 'O username é obrigatório!',
                'text_username.email' => 'Username deve ser um email válido!',
                'text_password.required' => 'A password é obrigatória!',
                'text_password.min' => 'A password de ter pelo menos :min caracteres!',
                'text_password.max' => 'A password de ter no máximo :max caracteres!',
                
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
