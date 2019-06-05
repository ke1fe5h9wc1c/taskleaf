@extends('layouts.app')
@section('content')
  <h1>タスク一覧</h1>
  <a class="btn btn-primary" href="tasks/create">新規作成</a>
  <br>
  <br>

  <table class="table">
    <thead>
      <tr>
        <th>名称</th>
        <th scope="col">日時</th>
        <th scope="col">編集</th>
        <th scope="col">削除</th>
      </tr>
    </thead>
    @foreach ($tasks as $task)
    <tbody>
      <tr>
        <td scope="row"><a href="/tasks/{{$task->id}}">{{ $task->name }}</a></td>
        <td>{{ $task->created_at }}</td>
        <td><a class="btn btn-success" href="tasks/{{$task->id}}/edit">編集</a></td>
        <td>
          <form action="/tasks/{{$task->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">
            <input type="submit" class="btn btn-danger" name="" value="削除">
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection
