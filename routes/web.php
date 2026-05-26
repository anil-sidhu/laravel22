<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::redirect("/welcome","/");
// Route::view("/welcome","welcome");


Route::get("/about/{name}",function($name){
    return view('about',["name"=>$name]);
});

// Route::get("/about/sam",function(){
//     return view('about');
// });


Route::get("/contact",function(){
    return "<h1>Contact Page</h1>";
});
