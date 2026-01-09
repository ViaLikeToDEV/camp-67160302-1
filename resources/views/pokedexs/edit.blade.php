@extends('templates.default')

@section('content')
    <h1>
        Pokedex Index Page
    </h1>

    <form action=" {{ url('/pokedexs/'.$pokedexs_edit->id) }} " method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $pokedexs_edit->name}}">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type" id="type" value="{{ $pokedexs_edit->type}}">
        <label for="species">Species</label>
        <input type="text" class="form-control" name="species" id="species" value="{{ $pokedexs_edit->species}}">
        <label for="height">Height</label>
        <input type="text" class="form-control" name="height" id="height" value="{{ $pokedexs_edit->height}}">
        <label for="weight">Weight</label>
        <input type="text" class="form-control" name="weight" id="weight" value="{{ $pokedexs_edit->weight}}">
        <label for="hp">HP</label>
        <input type="text" class="form-control" name="hp" id="hp" value="{{ $pokedexs_edit->hp}}">
        <label for="attack">ATK</label>
        <input type="text" class="form-control" name="attack" id="attack" value="{{ $pokedexs_edit->attack}}">
        <label for="defense">DEF</label>
        <input type="text" class="form-control" name="defense" id="defense" value="{{ $pokedexs_edit->defense}}">
        <label for="image_url">Img_url</label>
        <input type="text" class="form-control" name="image_url" id="image_url" value="{{ $pokedexs_edit->image_url}}">
        <button class="btn btn-primary mt-3" type="submit">Save</button>

    </form>
    @include('pokedexs.table')
@endsection
