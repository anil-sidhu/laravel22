<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1>Hello Anil sidhu<h1>";
});
Route::get('/home', function () {
    return view('home');
});

