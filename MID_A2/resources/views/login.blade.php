@extends('layouts.app')
@section('content')
    <form action="{{route('login.submit')}}" method="post">
        {{@csrf_field()}}
        <input type="text" name="uname" value="{{old('uname')}}" placeholder="Username">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="submit">
        @if(Session::get('msg'))
        <h2 class="text text-danger">{{Session::get('msg')}}<h2>
        @endif
    </from>
@endsection