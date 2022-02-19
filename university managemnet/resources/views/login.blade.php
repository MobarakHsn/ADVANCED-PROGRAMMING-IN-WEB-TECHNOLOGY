@extends('layouts.app')
@section('content')
    <form action="{{route('login.submit')}}" method="post">
        {{@csrf_field()}}
        <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
        @error('name')
        <span>
            {{$message}}
        </span>
        @enderror
        <br>
        <input type="text" name="id" value="{{old('id')}}" placeholder="Id">
        @error('id')
        <span>
            {{$message}}
        </span>
        @enderror
        <br>
        <input type="text" name="uname" value="{{old('uname')}}" placeholder="Username">
        @error('uname')
        <span>
            {{$message}}
        </span>
        @enderror
        <br>
        <input type="password" name="password" placeholder="Password">
        @error('password')
        <span>
            {{$message}}
        </span>
        @enderror<br>
        <input type="password" name='conf_password' placeholder="confirm password">
        @error('conf_password')
        <span>
            {{$message}}
        </span>
        @enderror<br>
        <input type="submit">
    </from>
@endsection
@section('demo')
    <h2>This is demo content</h2>
@endsection