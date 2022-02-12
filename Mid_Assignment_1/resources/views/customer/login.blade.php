@extends('layouts.CustomerLayout')
@section('content')
<form action="{{route('logincontrol')}}" method="post">
    {{@csrf_field()}}
    <h3>Login</h3>
    <table>
    <tr>
        <td>Phone:</td>
        <td>
            <input type="text" name="phone">
        </td>
        <td>
            {{$msg}}
            @error('phone')
            <span>
                {{$message}}
            </span>
            @enderror
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="submit">
        </td>
    </tr>
    </table>
</from>
@endsection