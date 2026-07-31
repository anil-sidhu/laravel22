<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/','add-user');
Route::get('/add-user',[UserController::class,'addUser']);