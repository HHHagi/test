@extends('layouts.base')

@section('title', 'ToDoリスト')

@section('content')

<input type="radio" name="status" value="all">すべて
<input type="radio" name="status" value="working">作業中
<input type="radio" name="status" value="finished">完了

<table>
     <tr>
          <td>ID</td>
          <td>コメント</td>
          <td>状態</td>
     </tr>
     @foreach($items as $item)
     <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->task}} </td>
          <td>
               <form action="{{ route('tasks.update', $item->id)}}" method="post" style="display: inline">
                    @csrf
                    @method('patch')
                    <button type="submit">
                         @if($item->status === 0)
                         作業中
                         @else($item->status === 1)
                         完了
                         @endif
                    </button>
               </form>

               <form action="{{ route('tasks.destroy', $item->id)}}" method="post" style="display: inline">
                    @csrf
                    @method('delete')
                    <button type="submit">削除</button>
               </form>
          </td>

     </tr>
     @endforeach
</table>

<h2>新規タスクの追加</h2><br>
@error('task')
<div>{{$message}}</div>
@enderror
<form method="post">
     @csrf
     <input type="text" name="task">
     <button type="submit">追加</button>
</form>

@endsection