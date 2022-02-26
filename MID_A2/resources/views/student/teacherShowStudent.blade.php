@extends('layouts.app')
@section('content')
Name: {{$student->name}}<br>
CGPA: {{$student->cgpa}}<br>
Enrolled Course:
    <table class="table table-bordered w-50">
        <tr>
            <th>Course Name</th>
            <th>Teacher Name</th>
        </tr>
        @foreach($student->courses as $c)
        <tr>    
            <td>{{$c->course->name}}</td>
            <td>
            @foreach($c->course->course_teachers as $t)
                {{$t->teacher->name}}
            @endforeach
            </td>
        </tr>
        @endforeach
    </table>
@endsection