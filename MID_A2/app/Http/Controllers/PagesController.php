<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.user');
    }
    public function login()
    {
        return view('login');
    }
    public function index()
    {
        //session()->flush();
        return view('home.index');
    }
    public function register()
    {
        return view('home.register');
    }

    public function loginsubmit(Request $req)
    {
        $student =Student::where('username',$req->uname)
        ->where('password',$req->password)
        ->first();

        if($student)
        {
            $req->session()->put('username',$student->username);
            $req->session()->put('usertype',"student");
            return redirect()->route('student.home');
        }

        $teacher =Teacher::where('username',$req->uname)
        ->where('password',$req->password)
        ->first();
        if($teacher)
        {
            $req->session()->put('username',$teacher->username);
            $req->session()->put('usertype',"teacher");
            return redirect()->route('teacher.home');
        }

        $admin =Admin::where('username',$req->uname)
        ->where('password',$req->password)
        ->first();
        if($admin)
        {
            $req->session()->put('username',$admin->username);
            $req->session()->put('usertype',"admin");
            return redirect()->route('admin.home');
        }
        $req->session()->flash('msg','user does not exists');
        return redirect()->route('Login');
    }

    public function registersubmit(Request $req)
    {
        //this will only validate req object
        $req->validate(
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'id'=>'required|regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}+$/',
                'uname'=>'required|min:5|max:10|starts_with:u,U,user',
                'password'=>'required|min:5',
                'conf_password'=>'required|same:password'
            ],
            [
                'uname.required'=>'Please provide username',
                'uname.max'=>'Username should not exceed 10 characters',
                'uname.min'=>'Username should contain at least 5 characters'
            ]
        );
        $st=new Student();
        $st->name=$req->name;
        $st->user_id=$req->id;
        $st->username=$req->uname;
        $st->password=md5($req->password);
        $st->save();
        return "form submitted with $req->uname and $req->password";
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
