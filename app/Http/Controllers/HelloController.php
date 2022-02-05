<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->get();
        return view('hello.index',['items'=>$items]);
    }

    public function show(Request $request)
    {
        $page = $request->page;
        $items = DB::table('people')->offset($page * 2)->limit(2)->get();
        return view('hello.show',['items'=>$items]);
    }
    
    public function post(Request $request)
    {
        $rules = [
            'msg' => 'required',
        ];
        $this->validate($request, $rules);
        $msg = $request->msg;
        $response = response()->view('hello.index', ['msg' => $msg]);
        $response->cookie('msg',$msg, 100);
        return $response;
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $params = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->insert($params);
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $person = DB::table('people')->where('id', $id)->first();
        return view('hello.edit',['person' => $person]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $params = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
            ];
        DB::table('people')->where('id', $id)->update($params);
        return redirect('/hello');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $person = DB::table('people')->where('id', $id)->first();
        return view('hello.delete',['person' => $person]);
    }

    public function remove(Request $request){
        $id = $request->id;
        DB::table('people')->where('id', $id)->delete();
        return redirect('/hello');
    }
}
