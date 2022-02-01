@extends('layouts.common')
@section('home')
<ol>
    @foreach($courses as $course)
    <br>
    <li>
        Course Name: {{$course->course}}<br>
        Course Instructor: {{$course->instructor}}<br>
        Course Douration: {{$course->duration}}<br>
        Course start: {{$course->starts}}<br>
    </li>
    @endforeach
</ol>
@endsection