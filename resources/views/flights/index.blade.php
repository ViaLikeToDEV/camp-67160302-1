@extends('templates.default')

@section('content')
    <h1>
        Flight create
    </h1>
    <form action="{{ url('flights') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name">
        <label for="airline">Airline</label>
        <input class="form-control" type="text" name="airline" id="airline">
        <label for="number_of_seat">Number of Seat</label>
        <input class="form-control" type="number" name="number_of_seat" id="number_of_seat">
        <label for="price">Price</label>
        <input class="form-control" type="decimal" name="price" id="price">
        <button class="btn btn-primary mt-3" type="submit">Create Flight</button>
    </form>
    <h1>
        Flight List
    </h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Airline</th>
                <th>Number of Seat</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($flights as $flight)
                <tr>
                    <td>{{ $flight->id }}</td>
                    <td>{{ $flight->name }}</td>
                    <td>{{ $flight->airline }}</td>
                    <td>{{ $flight->number_of_seat }}</td>
                    <td>{{ $flight->price }}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
@endsection
