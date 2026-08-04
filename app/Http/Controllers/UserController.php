<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\NoSpace;
use App\Rules\Uppercase;

class UserController extends Controller
{
    //
    function addUser(Request $request){

    $request->validate([
        "username"=>["required", "min:3", new NoSpace(), new Uppercase()],
        "phone"=>"required |  numeric | digits_between:3,12",
        "skills"=>"required | array"

    ],[
        "username.required"=>"Username can not be empty"
    ]);
        // return $request->method();
        // return $request->only(['phone',"username","dob"]);
        // return $request->except(['phone',"username","dob"]);
        // return $request->input('phone');
        // return $request->phone;
        // return $request->has('mobile');
        // $data= $request->input('name',"guest");
        return $request;
    }
}
