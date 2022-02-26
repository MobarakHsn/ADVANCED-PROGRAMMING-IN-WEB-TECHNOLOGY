@extends('layouts.app')
@section('content')
    <table class="table table-sm table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Id</th>
            </tr>
        </thead>
    @foreach($depts as $d)
    <tbody>
        <tr>
            <td><a href="{{route('department.details',['id'=>encrypt($d->id)])}}">{{$d->name}}</td>
            <td>{{$d->id}}</td>
        </tr>
    </tbody>
    @endforeach
    </table>
@endsection