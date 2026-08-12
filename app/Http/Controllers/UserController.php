<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function index(){
        DB::connection()->getPdo();
        $users=DB::select("select * from users");
        return $users;
    }

    function save(){
         DB::connection()->getPdo();
        $users=DB::insert("insert into users (name,email, phone) values (?,?,?)",[
            "tony","tony@test.com",1234566
        ]);
        if($users){
            return "New user is added";
        }else{
             return "No New user is added";
        }
     
    }

    function update(){

      DB::connection()->getPdo();
        $users=DB::update("update users set name=?, email=?,phone=? where id =?",[
            "tony stark","tony@stark.com",999,9
        ]);
        if($users){
            return " user is updated";
        }else{
             return "No user updated";
        }

    }

    function delete(){
 DB::connection()->getPdo();
        $users=DB::delete("delete from users where id =?",[9]);
        if($users){
            return " user is deleted";
        }else{
             return "No user deleted";
        }
    }
}
