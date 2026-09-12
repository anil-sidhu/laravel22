<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;



Route::view('add-employee','add-employee');
Route::post('add-employee',[EmployeeController::class,'add']);
Route::get('show-employee',[EmployeeController::class,'show']);


Route::view("welcome","welcome");

