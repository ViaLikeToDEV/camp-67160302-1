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
        return view('myview.calculate', ['number' => $number]);
    }

    // public function store(Request $request)
    // {
    //     // 1. รับค่าจาก name="email" ที่เราคุยกันตะกี้
    //     $email = $request->input('email');

    //     // 2. ประมวลผล (Logic) เช่น บันทึกลง Database
    //     // User::create(['email' => $email]); <-- สมมติว่ามี Model

    //     // 3. ส่งต่อ (Response) ไม่ใช่แค่ view แต่ redirect ได้
    //     return redirect('/')->with('status', 'บันทึกเรียบร้อยจ้า!');
    // }
}
