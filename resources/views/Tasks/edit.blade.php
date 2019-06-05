@extends('layouts.app')
@section('content')
<div class="col text-right">
   <a href="/">一覧</a>
 </div>

<form action="/tasks/{{$task->id}}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="task_name">名称</label>
    <input type="name" name="name" class="form-control" value="{{ $task->name }}">
  </div>
  <div class="form-group">
    <label for="task_description">詳しい説明</label>
    <input type="text" name="description" class="form-control" value="{{ $task->description }}">
  </div>
  <input type="hidden" name="_method" value="patch">
  <button type="submit" class="btn btn-primary">更新する</button>
</form>
@endsection
