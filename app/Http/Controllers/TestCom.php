<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestCom extends Controller
{
    //
    public function showTest(){
        $message2='こんにちは';
        return view('tests.test-com',compact('message2'));
    }
}
