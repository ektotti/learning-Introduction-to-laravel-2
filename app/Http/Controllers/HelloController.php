<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        $Agave = [
            'titanota',
            'black and blue',
            'super cruwn',
            'parie',
            'red cat wheels',
        ];
        return view('hello.index',['Agave' => $Agave]); 
    }

    public function post(Request $request) {
        
        $Agave = [
            'titanota',
            'black and blue',
            'super cruwn',
            'parie',
            'red cat wheels',
        ];

        return view('hello.index', ['Agave' => $Agave]);

    }
}
