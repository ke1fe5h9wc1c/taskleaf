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
      <label for="task_description">詳しい説明</label>
      <input type="text" name="description" class="form-control" placeholder="タスクの詳細">
    </div>
    <input type="hidden" name="user_id" class="form-control" value="{{ $id }}">
    <button type="submit" class="btn btn-primary">送信する</button>
  </form>
@endsection
