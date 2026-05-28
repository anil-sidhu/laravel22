<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('user',[UserController::class,'index']);
Route::get('get-user',[UserController::class,'getUser']);
Route::get('user-details/{name}',[UserController::class,'details']);
Route::get('welcome-user',[UserController::class,'welcome']);


