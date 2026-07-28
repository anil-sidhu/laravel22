<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/',"welcome");
Route::view('/home',"home");
Route::view('/about',"about");
Route::view('/contact',"contact");

