@extends('layouts.app')
@section('content')
<div class="col text-right">
   <a href="/">一覧</a>
 </div>

<form action="/tasks" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="task_name">名称</label>
    <input type="name" name="name" class="form-control" placeholder="タスクのタイトル">
  </div>
  <div class="form-group">
    <label for="task_description">パスワード</label>
    <input type="text" name="description" class="form-control" placeholder="タスクの詳細">
  </div>
  <button type="submit" class="btn btn-primary">送信する</button>
</form>
@endsection
