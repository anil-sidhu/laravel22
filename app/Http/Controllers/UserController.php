<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function index(){
        $users=['sidhu','sam','peter'];
        return view('user',['users'=>$users]);
    }
}
