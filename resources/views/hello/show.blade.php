@extends('layouts.helloapp')

@section('title', 'detail')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
<p>データベースの扱い方</p>
<table>
<tr><th>Id</th><th>Name</th><th>Mail</th><th>Age</th></tr>
@foreach( $items as $item )
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
</tr>
@endforeach
</table>
@endsection

@section('footer')
copy right norihiro
@endsection