@extends('layouts.base')

@section('title', 'ToDoリスト')

@section('content')

<form id="status">
     <input type="radio" name="status" value="all" id="all">すべて
     <input type="radio" name="status" value="work" id="work">作業中
     <input type="radio" name="status" value="done" id="done">完了
</form>

<table>
     <tr>
          <td>ID</td>
          <td>コメント</td>
          <td>状態</td>
     </tr>
     @foreach($items as $item)
     <!--      <div class="<?php echo $item->status; ?>"> -->
     <tr class="all <?php echo $item->status; ?>">
          <td>{{$loop->iteration}}</td>
          <td>{{$item->task}} </td>
          <td>
               <form action="{{ route('tasks.update', $item->id)}}" method="post" style="display: inline">
                    @csrf
                    @method('patch')
                    <button type="submit">
                         @if($item->status === "work")
                         作業中
                         @else($item->status === "done")
                         完了
                         @endif
                    </button>
                    <?php $status = $item->status; ?>
               </form>

               <form action="{{ route('tasks.destroy', $item->id)}}" method="post" style="display: inline">
                    @csrf
                    @method('delete')
                    <button type="submit">削除</button>
               </form>
          </td>
     </tr>
     <!--      </div> -->
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

<script>
     function valueChange(event) {
          const task_all = document.getElementsByClassName("all");
               for (var i = 0; i < task_all.length; i++) {
                    task_all[i].style.display = "table-row";
               }
          if (event.currentTarget.value === "work") {
               const task_done = document.getElementsByClassName("done");
               for (var i = 0; i < task_done.length; i++) {
                    task_done[i].style.display = "none";
               }
          } else if (event.currentTarget.value === "done") {
               const task_work = document.getElementsByClassName("work"); 
               for (var i = 0; i < task_work.length; i++) {
                    task_work[i].style.display = "none";
               } 
          }
     }
     const all = document.getElementById('all');
     all.checked = true;
     all.addEventListener('change', valueChange);

     const work = document.getElementById('work');
     work.addEventListener('change', valueChange);

     const done = document.getElementById('done');
     done.addEventListener('change', valueChange);
</script>

@endsection