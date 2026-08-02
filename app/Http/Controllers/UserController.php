<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser(Request $request){
        // return $request->method();
        // return $request->only(['phone',"username","dob"]);
        // return $request->except(['phone',"username","dob"]);
        // return $request->input('phone');
        // return $request->phone;
        // return $request->has('mobile');
        $data= $request->input('name',"guest");
        return $data;
    }
}
