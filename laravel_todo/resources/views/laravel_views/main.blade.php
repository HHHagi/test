@extends('layouts.base')

@section('title', 'ToDoリスト')

@section('content')

<input type="radio" name="status" value="all">すべて
<input type="radio" name="status" value="working">作業中
<input type="radio" name="status" value="finished">完了

<table>
<tr><td>ID</td><td>コメント</td><td>状態</td></tr>
@foreach($items as $item)
<tr>
     <td>{{$loop->iteration}}</td><td>{{$item->comment}} </td>
     <td><button type="text">作業中</button><button type="text">削除</button></td>
</tr>
@endforeach
</table>

<form method="post">
     @csrf
<h2>新規タスクの追加</h2><br>
 <input type="text" name="comment">
 <button type="submit">追加</button>
 </form>

@endsection