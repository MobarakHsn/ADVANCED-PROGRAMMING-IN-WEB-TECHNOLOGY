@extends('layouts.app')
@section('content')
<h3>View Product</h3>
<form action="" method="">
    @foreach($products as $p)
    <table>
        <tr>
            <td>Product Id:</td>
            <td>
                {{$p->id}}
            </td>
        </tr>
        <tr>
            <td>Product Name:</td>
            <td>
                {{$p->name}}
            </td>
        </tr>
        <tr>
            <td>Product Price:</td>
            <td>
                {{$p->price}}
            </td>
        </tr>
        <tr>
            <td>Product Quantity:</td>
            <td>
                {{$p->quantity}}
            </td>
        </tr>
        <tr>
            <td>Product Description:</td>
            <td>
                {{$p->description}}
            </td>
        </tr>
        -----------------------
    </table>
    @endforeach
</from>
@endsection