@extends('layouts.base')

@section('title', 'ユーザー登録画面')

@section('content')
<form action="register" method="post">
    @csrf
    @error('name')
    <p>{{$message}}</p>
    @enderror
    @error('email')
    <p>{{$message}}</p>
    @enderror
    @error('password')
    <p>{{$message}}</p>
    @enderror
    <table>
        <tr>
            <th>名前</th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        <tr>
            <th>Eメール</th>
            <td><input type="text" name="email" value="{{old('email')}}"></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td><input type="password" name="password" value="{{old('password')}}"></td>
        </tr>
        <tr>
            <th>パスワード再入力</th>
            <td><input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"></td>
        </tr>
    </table>
    <button type="submit">ログイン</button>
</form>
@endsection