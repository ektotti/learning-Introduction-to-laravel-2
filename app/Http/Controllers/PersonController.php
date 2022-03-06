<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $items = Person::orderBy('name', 'desc')->paginate(3);
        return view('person.index', compact('user', 'items'));
    }

    public function find(Request $request)
    {
        return view('person.find', ['input'=>'']);
    }

    public function search(Request $request)
    {
        $min = $request->input;
        $max = $min + 50;
        $items = Person::AgeGreaterThan($min)->AgeLessThan($max)->get();
        return view('person.find', ['items'=>$items, 'input'=>$min]);
    }

    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $input = $request->all();
        unset($input['_token']);
        $person->fill($input)->save();

        return redirect('/person');
    }

    public function edit(Request $request)
    {
        $item = Person::find($request->id);
        return view('person.edit', ['item'=>$item]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $item = Person::find($request->id);
        $input = $request->all();
        unset($input['_token']);
        $item->fill($input)->save();
        return redirect('/person');
    }

    public function delete(Request $request)
    {
        $item = Person::find($request->id);
        return view('person.delete', ['person'=>$item]);
    }

    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/person');
    }

}
