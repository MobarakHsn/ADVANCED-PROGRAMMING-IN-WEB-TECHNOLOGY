@extends('layouts.app')
@section('content')
    <div>
        <h2 class="text text-success">{{$d->name}}</h2>
    </div>
    @if(count($d->students)>0)
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th>Dob</th>
                <th>Cgpa</th>
            </tr>
        </thead>
    @foreach($d->students as $s)
    <tbody>
        <tr>
            <td>{{$s->name}}</td>
            <td>{{$s->id}}</td>
            <td>{{$s->dob}}</td>
            <td>{{$s->cgpa}}</td>
        </tr>
    </tbody>
    @endforeach
    </table>
    @else
        <span class="text text-danger">No students found</span>
    @endif

    @if(count($d->courses)>0)
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Id</th>
            </tr>
        </thead>
    @foreach($d->courses as $dept)
    <tbody>
        <tr>
            <td>{{$dept->name}}</td>
            <td>{{$dept->id}}</td>
        </tr>
    </tbody>
    @endforeach
    </table>
    @else
        <span class="text text-danger">No courses found</span>
    @endif
@endsection