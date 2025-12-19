<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function myFunc() {
        return view('myview.index');
    }

    function anotherFunc() {
        return $this->myFunc();
    }

    function info() {
        return view('myview.info');
    }

    function calculate(Request $request) {
        $number = $request->input('mynumber');
        // Perform some calculation with $number if needed
        return view('myview.calculate', ['number' => $number]);
    }
}
