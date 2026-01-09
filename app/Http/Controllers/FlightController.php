<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['flights'] = Flight::all();


        return view('flights.index', $data);
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
        $flights = new Flight;
        $flights->name = $request->input('name');
        $flights->airline = $request->input('airline');
        $flights->number_of_seat = $request->input('number_of_seat');
        $flights->price = $request->input('price');
        $flights->save();

        return redirect()->route('flights.index');
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
        $data['flight_update'] = Flight::find($id);
        $data['flights'] = Flight::all();

        return view('flights.edit', $data);
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
        $flights = Flight::find($id);
        $flights->name = $request->input('name');
        $flights->airline = $request->input('airline');
        $flights->number_of_seat = $request->input('number_of_seat');
        $flights->price = $request->input('price');
        $flights->save();

        return redirect()->route('flights.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flights = Flight::find($id);
        $flights->delete();
        return redirect()->route('flights.index');
    }
}
