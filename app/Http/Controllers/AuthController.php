<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    function login($type){
        // return "Login function of auth controller";
        // $type="admin";
        // return view('login',["type"=>$type]);
        return view('user.user-login');
    }
}
