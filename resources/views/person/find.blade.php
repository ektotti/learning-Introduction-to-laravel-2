@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<p>モデルの扱い方</p>
@if(isset($items))
<table>
<tr><th>Data</th></tr>
@foreach($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
@endforeach
</table>
@endif

<form action="find" method="POST">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="送信">
</form>
@endsection

@section('footer')
copy right norihiro
@endsection