<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //
    public function list()
    {
        $depts=Department::all();
        return view('department.list')->with('depts',$depts);
    }
    public function details(Request $req)
    {
        $d=Department::where('id',decrypt($req->id))->first();
        //return $d->students;
        return view('department.details')->with('d',$d);
    }
}
