<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function list(){
        $employees = Employee::all();
        // dd($employees);
        return view('admin.pages.employee-list',compact('employees'));   
    }

    public function create(){
        return view('admin.pages.create-employee');
    }

    public function add(Request $request){
        // dd($request->all());
        Employee::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            
        ]);
        return redirect()->back();
    }
}
