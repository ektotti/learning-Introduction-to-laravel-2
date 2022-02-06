<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index()
    {
        $items = Board::with('person')->get();
        return view('board.index',['items' => $items]);
    }

    public function add()
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Board::$rules);
        $item = new Board;
        $input = $request->all();
        unset($input['_token']);
        $item->fill($input)->save();

        return redirect('/board');
    }
}
