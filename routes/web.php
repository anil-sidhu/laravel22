<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


Route::get('user',[UserController::class,'index']);
Route::get('get-user',[UserController::class,'getUser']);
Route::get('user-details/{name}',[UserController::class,'details']);
Route::get('welcome-user',[UserController::class,'welcome']);

// $type="user";
// // Route::view('login','login',["type"=>$type]);
// Route::get('login/{type}',function($type){
//     return view('login',["type"=>$type]);
// });
// Route::view('signup','signup');
// Route::view('resister','signup');
Route::get('login/{type}',[AuthController::class,'login']);

