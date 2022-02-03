<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        if($request->hasCookie('msg')){
            $msg = $request->cookie('msg');
        } else {
            $msg = 'クッキーに値が保存されておりません';
        }
        return view('hello.index', ['msg' => $msg]);
    }
    
    public function post(Request $request) {

        $rules = [
            'msg' => 'required',
        ];
        $this->validate($request, $rules);
        $msg = $request->msg;
        $response = response()->view('hello.index', ['msg' => $msg]);
        $response->cookie('msg',$msg, 100);
        return $response;

    }
}
