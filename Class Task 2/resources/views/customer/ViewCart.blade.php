@extends('layouts.CustomerLayout')
@section('content')
    <?php $cnt=1; ?>
    @foreach($products as $p)
    <table>
        <tr>
            <td>{{$cnt}}</td>
            <?php $cnt++;?>
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
            <td>Product Description:</td>
            <td>
                {{$p->description}}
            </td>
        </tr>
        ----------------------------
    </table>
    @endforeach
@endsection