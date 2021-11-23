<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use Session;
use Hash;
use Validator;
use Auth;
use DB;

class CompaniesController extends Controller
{
    public function companies()
    {
        
        return view('companies');
    }

    public function newcompany()
    {
        
        return view('newcompany');
    }

    public function addCompany(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'logo'=>'required',
            'website'=>'required'
        ]);
    
        $companies = new companies();
    $companies ->name = $request ->name;
    $companies ->email = $request ->email;
    $companies ->logo = $request ->logo;
    $companies ->website = $request ->website;
    
    $res = $companies ->save();
    if($res){
        return back()->with('success','Registered Successfully');
    }
    else{
        return back()->with('fail','Something was wrong');
    }
}

public function listCompanies()
{
    $companies = DB::table('companies') ->get();
    return view ('readcompanies', compact ('companies'));
}

public function updateCompany($id)
{
    $companies = DB::table('companies') ->where('id', $id) ->first();
    return view('updatecompanies', compact('companies'));
}

public function editCompany(Request $request)
{
    DB::table('companies') -> where('id', $request->id) ->update([
        'name' => $request ->name,
        'email' => $request ->email,
        'logo' => $request ->logo,
        'website' => $request ->website
    ]);
    return back()->with('company_update','Updated Successfully');
}

public function deleteCompany($id)
{
    DB::table('companies') -> where('id', $id) ->delete();
    return back()->with('company_delete','Deleted Successfully');
}

}
