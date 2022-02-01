@extends('layouts.common')
@section('contact')
<ol>
    @foreach($contacts as $contact)
    <br>
    <li>
        Name: {{$contact->name}}<br>
        Position: {{$contact->position}}<br>
        Email: {{$contact->email}}<br>
    </li>
    @endforeach
</ol>
@endsection
