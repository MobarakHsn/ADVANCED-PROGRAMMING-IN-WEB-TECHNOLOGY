<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }
    public function index()
    {
        return view('home.index');
    }
    public function register()
    {
        return view('home.register');
    }

    public function loginsubmit(Request $req)
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


        // this can validate any object
        // $this->validate($req,
        // [
        //     'name'=>'required|regex:/^[A-Z a-z]+$/',
        //     'id'=>'required|regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}+$/',
        //     'uname'=>'required|min:5|max:10|starts_with:u,U,user',
        //     'password'=>'required|min:5',
        //     'conf_password'=>'required|same:password'
        // ],
        // [
        //     'uname.required'=>'Please provide username',
        //     'uname.max'=>'Username should not exceed 10 characters',
        //     'uname.min'=>'Username should contain at least 5 characters'
        // ]);

        return "form submitted with $req->uname and $req->password";
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
        $st->password=$req->password;
        $st->save();
        return "form submitted with $req->uname and $req->password";
    }
}
