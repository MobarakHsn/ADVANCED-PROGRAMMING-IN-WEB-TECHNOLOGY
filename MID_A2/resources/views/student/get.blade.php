@extends('layouts.app')
@section('content')
    @if($student!=null)
    <h1>student Info</h1>
    <h3>Name: {{$student->name}}</h3>
    <h3>Id: {{$student->id}}</h3>
    <h3>Dob: {{$student->dob}}</h3>
    <h3>Departmnet Name: {{$student->department->name}}</h3>
    @else
        <h2 class="text text-danger">None found<h2>
    @endif
    <h1>Course Details:</h1>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Department</th>
        </tr>
        @foreach($student->courses as $c)
        <tr>
            <td>
                {{$c->course->name}}
            </td>
            <td>
                {{$c->course->department->name}}
            </td>
        </tr>
        @endforeach
    </table>
@endsection