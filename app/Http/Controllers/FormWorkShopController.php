<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormWorkShopController extends Controller
{
    function store(Request $request) {
        $fname = $request->input('firstName');
        $lname = $request->input('lastName');
        $date_of_birth = $request->input('dob');
        $age = $request->input('age');
        $address = $request->input('address');
        $favColor = $request->input('favColor');

        return view('formworkshop.receptor', [
            'fname' => $fname,
            'lname' => $lname,
            'date_of_birth' => $date_of_birth,
            'age' => $age,
            'address' => $address,
            'favColor' => $favColor
        ]);

    }
}
