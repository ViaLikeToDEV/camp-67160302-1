@extends('templates.default')

@section('content')
    <h1>Form Receptor</h1>
    <p>First Name: {{ $fname }}</p>
    <p>Last Name: {{ $lname }}</p>
    <p>Date of Birth: {{ $date_of_birth }}</p>
    <p>Age: {{ $age }}</p>
    <p>Adress: {{$address}}</p>
    <p>Favorite Color: {{$favColor}}</p>
@endsection
