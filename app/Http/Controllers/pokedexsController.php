<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class pokedexsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pokedexs'] = Pokedex::all();
        return view('pokedexs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pokedexs = new Pokedex;
        $pokedexs->name = $request->input('name');
        $pokedexs->type = $request->input('type');
        $pokedexs->species = $request->input('species');
        $pokedexs->height = $request->input('height');
        $pokedexs->weight = $request->input('weight');
        $pokedexs->hp = $request->input('hp');
        $pokedexs->attack = $request->input('attack');
        $pokedexs->defense = $request->input('defense');
        $pokedexs->image_url = $request->input('image_url');
        $pokedexs->save();

        return redirect()->route('pokedexs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit['pokedexs_edit'] = Pokedex::find($id);
        $edit['pokedexs'] = Pokedex::all();

        return view('pokedexs.edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit_obj = Pokedex::find($id);
        $edit_obj->name = $request->input('name');
        $edit_obj->type = $request->input('type');
        $edit_obj->species = $request->input('species');
        $edit_obj->height = $request->input('height');
        $edit_obj->weight = $request->input('weight');
        $edit_obj->hp = $request->input('hp');
        $edit_obj->attack = $request->input('attack');
        $edit_obj->defense = $request->input('defense');
        $edit_obj->image_url = $request->input('image_url');
        $edit_obj->save();

        return redirect()->route('pokedexs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edit_obj = Pokedex::find($id);
        $edit_obj->delete();

        return redirect()->route('pokedexs.index');
    }
}
