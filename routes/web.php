<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::view("/student","student");
Route::post("/student",[StudentController::class,'index']);

Route::view("welcome","welcome");

