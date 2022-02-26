@extends('layouts.app')
@section('content')
    <h3>{{Session::get('msg')}}</h3>
    <h1>This is my homepage</h1>
@endsection
    