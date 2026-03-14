<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // metodo para login
    public function login (){
        echo 'Login';
    }

    // metodo para logout
    public function logout (){
        echo 'Logout';
    }
}
