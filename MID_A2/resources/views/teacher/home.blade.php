@extends('layouts.app')
@section('content')
Taught Courses:
    <table class="table table-bordered w-50">
        <tr>
            <th>Course Name</th>
            <th>Students</th>
        </tr>
        @foreach($teacher->taught_courses as $c)
        <tr>    
            <td>{{$c->course->name}}</td>
            <td>
            @foreach($c->course->students as $s)
                <br>
                <a class="text text-info" href="{{route('teacher.get',$s->student->username)}}">{{$s->student->name}}</a>
            @endforeach
            </td>
        </tr>
        @endforeach
    </table>
@endsection