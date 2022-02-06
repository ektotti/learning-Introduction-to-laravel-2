@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    挿入
@endsection

@section('content')
<p>データベースの扱い方</p>
@if( count($errors) > 0 )
<div>
    <ul>
        @foreach( $errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/laravelintroduction/board/add" method="post">
    @csrf
    <table>
    <tr><th>Person_id：</th><td><input type="text" name="person_id"></td></tr>
    <tr><th>Title：</th><td><input type="text" name="title"></td></tr>
    <tr><th>Message：</th><td><input type="text" name="message"></td></tr>
    <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </table>
</form>
@endsection

@section('footer')
copy right norihiro
@endsection