@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    Boardインデックスページ
@endsection

@section('content')
<p>リレーションの扱い方</p>
<table>
<tr><th>Data</th></tr>
@foreach($items as $item)
<tr>
    <td>{{$item->getData()}}</td>
</tr>
@endforeach
</table>
@endsection

@section('footer')
copy right norihiro
@endsection