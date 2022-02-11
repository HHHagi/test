@extends('layouts.base')

@section('title', 'ログイン画面')

@section('content')
<form action="register" method="post">
     @csrf
 Eメール<input type="text"><br>
 パスワード<input type="password"><br>
 <button type="submit">ログイン</button>
 </form>
@endsection