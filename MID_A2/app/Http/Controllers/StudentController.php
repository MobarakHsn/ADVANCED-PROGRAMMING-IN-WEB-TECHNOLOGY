<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use DateTime;

class StudentController extends Controller
{
    public function __construct() // this middleware will be used for all the function of student controller
    {
        $this->middleware('auth.student');
    }
    //
    public function home()
    {
        $student =Student::where('username',session()->get('username'))
        ->first();
        return view('student.home')->with('student',$student);
        //return $student;
    }
    public function create()
    {
        return view('student.create');
    }
    public function edit()
    {
        return view('student.edit');
    }
    public function delete()
    {

    }
    public function get(Request $req)
    {
        // $student = array
        // (
        //     "name"=> $req->name,
        //     "id"=>$req->id,
        //     "dob"=>$req->dob
        // );
        // $student=(object)$student;
        // //return var_dump($student);
        $student=Student::where('id','=',$req->id)->first();
        //return $student->courses;
        $sum=12+12;
        return view('student.get')
        ->with('student',$student)
        ->with('sum',$sum);
    }
    public function MakeStudentObject($name,$id,$dob)
    {
        $student = array
        (
            "name"=> $name,
            "id"=>$id,
            "dob"=>$dob
        );
        return (object)$student;
    }
    public function list()
    {
        // if(!session()->get('user'))
        // {
        //     return redirect()->route('Login');
        // }
        // $students=[];
        // $date=new DateTime();
        // $date=$date->format('Y-m-d H:i:s');
        // for($i=1;$i<=10;$i++)
        // {
        //     $students[]=$this->MakeStudentObject("student$i",$i,$date);
        // }
        $students=Student::all();
        return view('student.list')->with('students',$students);
    }
}
?>
