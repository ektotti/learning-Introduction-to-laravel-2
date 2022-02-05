@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    挿入テーブル
@endsection

@section('content')
<p>データベースの扱い方</p>
<form action="/laravelintroduction/hello/add" method="post">
    @csrf
    <table>
    <tr><th>Name：</th><td><input type="text" name="name"></td></tr>
    <tr><th>Mail：</th><td><input type="text" name="mail"></td></tr>
    <tr><th>Age ：</th><td><input type="text" name="age"></td></tr>
    <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </table>
</form>
@endsection

@section('footer')
copy right norihiro
@endsection