@extends('templates.default')

@section('content')
    <h1>
        Flight create
    </h1>
    <form action="{{ url('/flights/'.$flight_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ $flight_update->name }}">
        <label for="airline">Airline</label>
        <input class="form-control" type="text" name="airline" id="airline" value="{{ $flight_update->airline }}">
        <label for="number_of_seat">Number of Seat</label>
        <input class="form-control" type="number" name="number_of_seat" id="number_of_seat" value="{{ $flight_update->number_of_seat }}">
        <label for="price">Price</label>
        <input class="form-control" type="decimal" name="price" id="price" value="{{ $flight_update->price }}">
        <button class="btn btn-primary mt-3" type="submit">Create Flight</button>
    </form>
    <h1>
        Flight Lists
    </h1>
    @include('flights.table')

@endsection
