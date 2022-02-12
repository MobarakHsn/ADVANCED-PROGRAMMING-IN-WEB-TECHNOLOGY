@extends('layouts.app')
@section('content')
<h3>Edit Product</h3>
<form action="{{route('product.edit',['edit_id'=>$product->id])}}" method="post">
    {{@csrf_field()}}
    <table>
        <tr>
            <td>Product Name:</td>
            <td>
                <input type="text" name="name" value="{{$product->name}}" placeholder="Product Name">
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
                <input type="text" name="price" value="{{$product->price}}" placeholder="Product Price">
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
                <input type="text" name="quantity" value="{{$product->quantity}}" placeholder="Product Quantity">
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
                <input type="text" name="description" value="{{$product->description}}" placeholder="Product Description">
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
            <td><input type="submit" value="Edit"></td>
        </tr>
    </table>
</from>
@endsection