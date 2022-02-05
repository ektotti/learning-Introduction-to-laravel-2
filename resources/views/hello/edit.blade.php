@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    挿入テーブル
@endsection
@section('content')
<p>データベースの扱い方</p>
<form action="/laravelintroduction/hello/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$person->id}}">
    <table>
    <tr><th>Name：</th><td><input type="text" name="name" value="{{$person->name}}"></td></tr>
    <tr><th>Mail：</th><td><input type="text" name="mail" value="{{$person->mail}}"></td></tr>
    <tr><th>Age ：</th><td><input type="text" name="age" value="{{$person->age}}"></td></tr>
    <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </table>
</form>
@endsection

@section('footer')
copy right norihiro
@endsection