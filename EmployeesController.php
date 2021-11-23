<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Session;
use Hash;
use Validator;
use Auth;
use DB;

class EmployeesController extends Controller
{
    public function employees()
    {
        
        return view('employees');
    }

    public function newemployee()
    {
        
        return view('newemployee');
    }

    public function addEmployee(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'company'=>'required',
            'email'=>'required|email|unique:users',
            'phone'=>'required|min:4|max:10',
        ]);
    
    $employees = new employees();

    $employees -> firstname = $request -> firstname;
    $employees -> lastname = $request ->lastname;
    $employees ->company = $request ->company;
    $employees ->email = $request ->email;
    $employees ->phone= $request ->phone;
    
    $res = $employees ->save();
    if($res){
        return back()->with('success','Registered Successfully');
    }
    else{
        return back()->with('fail','Something was wrong');
    }
    }

    public function listEmployees()
{
    $employees = DB::table('employees') ->get();
    return view ('reademployees', compact ('employees'));
}

public function updateEmployees($id)
{
    $employees = DB::table('employees') ->where('id', $id) ->first();
    return view('updateemployees', compact('employees'));
}

public function editEmployee(Request $request)
{
    DB::table('employees') -> where('id', $request->id) ->update([
        'firstname' => $request ->firstname,
        'firstname' => $request ->firstname,
        'company' => $request ->company,
        'email' => $request ->email,
        'phone' => $request ->phone
        
    ]);
    return back()->with('employee_update','Updated Successfully');
}

public function deleteEmployee($id)
{
    DB::table('employees') -> where('id', $id) ->delete();
    return back()->with('employee_delete','Deleted Successfully');
}

}