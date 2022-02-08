@extends('layouts.app')
@section('content')
<h3>Delete Product</h3>
<form action="{{route('product.delete')}}" method="post">
    {{@csrf_field()}}
    <table>
        <tr>
            <td>
                Enter Id: 
            </td>
            <td>
                <input type="text" name="id" placeholder="Id">
            </td>
            <td>
                @error('id')
                <span>
                    {{$message}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Delete">
            </td>
        </tr>
    </table>
</from>
@endsection