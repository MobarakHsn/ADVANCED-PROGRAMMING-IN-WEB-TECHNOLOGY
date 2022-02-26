<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;

class TeacherController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.teacher');
    }
    public function home()
    {
        $teacher =Teacher::where('username',session()->get('username'))
        ->first();
        return view('teacher.home')->with('teacher',$teacher);
        //return $student;
    }
    public function get(Request $req)
    {
        $student =Student::where('username',$req->username)
        ->first();
        return view('student.teacherShowStudent')->with('student',$student);
    }

}
