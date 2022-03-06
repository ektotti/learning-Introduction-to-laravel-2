@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<p>データベースの扱い方</p>
@if(Auth::check())
 <p>{{$user->name}}がログイン中です。</p>
    <table>
        <tr><th><a href="/laravelintroduction/person?sort=name">Name</a></th><th><a href="/laravelintroduction/person?sort=mail">Mail</a></th><th><a href="/laravelintroduction/person?sort=age">Age</a></th></tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
        </tr>
        @endforeach
    </table>
    {{$items->links()}}
@else
 <p>ログインしておりません。</p>
@endif

@endsection

@section('footer')
copy right norihiro
@endsection