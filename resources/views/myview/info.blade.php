@extends('templates.default')
@section('header', 'Info Page')
@section('content')
    <form action="/calculate" method="post">
        @csrf
        <input class="form-control" name="mynumber" type="number" placeholder="Enter your number">
        <br>
        <button type="submit" class="btn btn-success"> save</button>
    </form>
@endsection
