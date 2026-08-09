<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelperController;

Route::view('/','helper-view');
Route::post('/helper',[HelperController::class,'index']);


 
