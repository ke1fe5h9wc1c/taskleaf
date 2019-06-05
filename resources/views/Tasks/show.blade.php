@extends('layouts.app')
@section('content')
  <h1>タスクの詳細</h1>
  <div class="col text-right">
     <a href="/">一覧</a>
  </div>
  <br>
  <table class="table">
    <tbody>
      <tr>
        <th scope="row">ID</th>
        <td>{{ $task->id }}</td>
      </tr>
      <tr>
        <th scope="row">名称</th>
        <td>{{ $task->name }}</td>
      </tr>
      <tr>
        <th scope="row">詳しい説明</th>
        <td>{{ $task->description }}</td>
      </tr>
      <tr>
        <th scope="row">登録日時</th>
        <td>{{ $task->created_at }}</td>
      </tr>
      <tr>
        <th scope="row">更新日時</th>
        <td>{{ $task->updated_at }}</td>
      </tr>
    </tbody>
  </table>

  <table class="table">
    <tr>
      <td><a class="btn btn-success" href="{{$task->id}}/edit">編集</a></td>
      <td>
        <form action="/tasks/{{$task->id}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="delete">
          <input type="submit" class="btn btn-danger" name="" value="削除">
        </form>
      </td>
    </tr>
  </table>
@endsection
