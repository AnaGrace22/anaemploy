<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\annamodel;

class annacontroller extends Controller
{
 public function index()
 {
    return view('employee.index');
 }

 public function store(Request $request)
 {
    $employeeData = [
        'firstname' => $request->input('firstname'),
        'lastname' => $request->input('lastname'),
        'middlename' => $request->input('middlename'),
        'address' => $request->input('address'),
        'country' => $request->input('country'),
        'state'=> $request->input('state'),
        'city'=> $request->input('city'),
        'zip'=> $request->input('zip'),
        'BOD' => $request->input('BOD'), 
        'DOH' => $request->input('DOH'),
        'department' => $request->input('department'),
     
    ];

    employeemodel::create($employeeData);

    return redirect('users');

 }
}
