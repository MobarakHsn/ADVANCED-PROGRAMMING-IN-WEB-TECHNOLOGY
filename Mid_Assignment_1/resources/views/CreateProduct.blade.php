@extends('layouts.app')
@section('content')
<h3>Create Product</h3>
<form action="{{route('product.create')}}" method="post">
    {{@csrf_field()}}
    <table>
        <tr>
            <td>Product Name:</td>
            <td>
                <input type="text" name="name" value="{{old('name')}}" placeholder="Product Name">
            </td>
            <td>
                @error('name')
                <span>
                    {{$message}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Product Price:</td>
            <td>
                <input type="text" name="price" value="{{old('price')}}" placeholder="Product Price">
            </td>
            <td>
                @error('price')
                <span>
                    {{$message}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Product Quantity:</td>
            <td>
                <input type="text" name="quantity" value="{{old('quantity')}}" placeholder="Product Quantity">
            </td>
            <td>
                @error('quantity')
                <span>
                    {{$message}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Product Description:</td>
            <td>
                <input type="text" name="description" value="{{old('description')}}" placeholder="Product Description">
            </td>
            <td>
                @error('description')
                <span>
                    {{$message}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Create"></td>
        </tr>
    </table>
</from>
@endsection