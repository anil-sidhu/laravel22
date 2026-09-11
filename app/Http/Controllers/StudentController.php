<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function index(Request $request){
        $request->session()->put('name',$request->input('user'));
        return view('welcome');
    }
}
