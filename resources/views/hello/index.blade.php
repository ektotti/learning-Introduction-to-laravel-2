@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<body>
    <h1>Hello/Index</h1>
    <p>{!!$msg!!}</p>
    <ul>
    @foreach($data as $item)
    <li>{!!$item!!}</li>
    @endforeach
    </ul>
</body>
@endsection

@section('footer')
copy right norihiro
@endsection