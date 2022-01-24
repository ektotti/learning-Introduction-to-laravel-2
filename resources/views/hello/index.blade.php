@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文です。</p>
    <p>必要な記述ができます。</p>
    <p>{{$composer_class_message}}</p>
    <ul>
        @each('components.item', $Agave, 'item')
    </ul>
@endsection

@section('footer')
copy right norihiro
@endsection