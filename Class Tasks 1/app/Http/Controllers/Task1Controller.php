<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task1Controller extends Controller
{
    //
    public function course()
    {
        $courses=array();
        $course=array
        (
            "course"=>"Programming With Python",
            "instructor"=>"Mr. David",
            "duration"=>"4 Months",
            "starts"=>"10th Feunruary 2022"
        );
        $course=(object)$course;
        $courses[]=$course;
        $course=array
        (
            "course"=>"Advance web tech",
            "instructor"=>"Mr. Hamid",
            "duration"=>"3 Months",
            "starts"=>"11th Feunruary 2022"
        );
        $course=(object)$course;
        $courses[]=$course;
        $courses=(object)$courses;
        return view('Task1.homepage')->with('courses',$courses);
    }

    public function contact()
    {
        $contacts=array();
        $contact=array
        (
            "name"=>"Tanvir Ahmed",
            "position"=>"Developer",
            "email"=>"t.a@st.edu"
        );
        $contact=(object)$contact;
        $contacts[]=$contact;

        $contact=array
        (
            "name"=>"Rayhan Uddin",
            "position"=>"Co-ordinator",
            "email"=>"r.u@st.edu"
        );
        $contact=(object)$contact;
        $contacts[]=$contact;

        $contact=array
        (
            "name"=>"Mushfiq Rahman",
            "position"=>"Manager",
            "email"=>"ms@st.edu"
        );
        $contact=(object)$contact;
        $contacts[]=$contact;
        
        return view('Task1.viewcontact')->with('contacts',$contacts);
    }
}
