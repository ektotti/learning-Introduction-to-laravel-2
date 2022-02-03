@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}} </p>
    @if (count($errors) > 0)
      <p>入力に問題がございます。再入力してください</p>
    @endif
    <form action="/laravelintroduction/hello" method="POST">
        <table>
            @csrf
            @error('msg')
            <tr><th>Error: </th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>name: </th><td><input type="text" name="msg" value="{{old('msg')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="送信"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copy right norihiro
@endsection