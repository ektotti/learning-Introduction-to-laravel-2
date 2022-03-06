@extends('layouts.helloapp')

@section('title', 'Session')

@section('menubar')
 @parent
 セッションページ
@endsection

@section('content')
<p>{{$session_data}}</p>
<form action="/laravelintroduction/hello/session" method="POST">
    @csrf
    <input type="text" name="input" >
    <input type="submit" value="送信">
</form>

@endsection

@section('footer')
copyright 2022 norihiro
@endsection