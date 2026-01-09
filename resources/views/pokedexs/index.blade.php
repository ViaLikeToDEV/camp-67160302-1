@extends('templates.default')

@section('content')
    <h1>
        Pokedex Index Page
    </h1>

    <form action=" {{ url('pokedexs') }} " method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type" id="type">
        <label for="species">Species</label>
        <input type="text" class="form-control" name="species" id="species">
        <label for="height">Height</label>
        <input type="text" class="form-control" name="height" id="height">
        <label for="weight">Weight</label>
        <input type="text" class="form-control" name="weight" id="weight">
        <label for="hp">HP</label>
        <input type="text" class="form-control" name="hp" id="hp">
        <label for="attack">ATK</label>
        <input type="text" class="form-control" name="attack" id="attack">
        <label for="defense">DEF</label>
        <input type="text" class="form-control" name="defense" id="defense">
        <label for="image_url">Img_url</label>
        <input type="text" class="form-control" name="image_url" id="image_url">
        <button class="btn btn-primary mt-3" type="submit">Submit</button>

    </form>
    @include('pokedexs.table')
@endsection
