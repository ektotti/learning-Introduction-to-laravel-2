@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<p>データベースの扱い方</p>
<table>
<tr><th>Name</th><th>Mail</th><th>Age</th></tr>
@foreach($hasItems as $hasItem)
<tr>
    <td>{{$hasItem->name}}</td>
    <td>{{$hasItem->mail}}</td>
    <td>{{$hasItem->age}}</td>
    @foreach($hasItem->boards as $board)
    <td>{{$board->title}}</td>
    @endforeach
</tr>
@endforeach
</table>
<div style="margin: 10px;"></div>
<table>
<tr><th>Name</th><th>Mail</th><th>Age</th></tr>
@foreach($doesntHaveItems as $doesntHaveItem)
<tr>
    <td>{{$doesntHaveItem->name}}</td>
    <td>{{$doesntHaveItem->mail}}</td>
    <td>{{$doesntHaveItem->age}}</td>
</tr>
@endforeach
</table>
@endsection

@section('footer')
copy right norihiro
@endsection