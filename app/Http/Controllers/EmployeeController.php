<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    //

    function add(Request $req){

    // $employee= new Employee();
    // $employee->name= $req->name;
    // $employee->email= $req->email;
    // $employee->phone= $req->phone;
    // if($employee->save()){
    //     return "data stored";
    // }else{
    //     return "data not stored";
    // }

    // return Employee::create([
    //     "name"=> $req->name,
    //     "email"=> $req->email,
    //     "phone"=> $req->phone,

    // ]);

     Employee::create($req->all());

     return redirect('show-employee');
   
   
    }


    function show(){
        $data= Employee::all();
    return view('show-employees',["employees"=>$data]);
    }

    function delete($id){
        Employee::find($id)->delete();
         return redirect('show-employee');
        
    }

    function update($id){
       $data= Employee::find($id);
        return view("update-employee",["emp"=>$data]);
    }
}
