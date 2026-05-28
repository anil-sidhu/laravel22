<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index(){
        return "this is a user controller";
    }
    function getUser(){
        return "this is the get user route";
    }
    function details($name){
        return "this is the get detail page for ".$name;
    }
    function welcome(){
        return view('user.welcome-user');
    }
}
