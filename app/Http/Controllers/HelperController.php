<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    //
    function index(Request $req){
        // dump($req);
        // echo "hello";
        // echo env("DB_USERNAME");
        // echo config("app.locale");
        // return config("database.connections.sqlite.database");
        // echo url("login");
        echo formatePrice(1000);
    }
}
