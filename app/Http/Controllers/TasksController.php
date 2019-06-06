<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use Illuminate\Http\Request;
use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
     $this->middleware('auth');
    }

    public function index()
    {
        // 現在のUser_idを取得して、現在のUserが投稿したタスクのみを表示
        $id = Auth::id();
        $tasks = Task::where('user_id',$id)->get();
        return view('tasks.index',['tasks'=>$tasks,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        return view('tasks.create',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTaskRequest $request)
    {
      $task = new Task;
      $task->name = $request->name;
      $task->description = $request->description;
      $task->user_id = $request->user_id;
      $task->save();
      return redirect('/')->with('flash_message', '投稿が完了しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // 現在のUser_id及び、TaskのUser_id取得して、現在のUser_id=TaskのUser_idならTaskを表示
      $user_id = Auth::id();
      $task = Task::find($id);
      $task_id = $task['user_id'];
      if ($user_id == $task_id)
      {
        return view('tasks.show',['task'=>$task]);
      }
      return redirect("/")->with('flash_message', '他のUserのTaskは確認できません。');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // 現在のUser_id及び、TaskのUser_id取得して、現在のUser_id=TaskのUser_idならTaskを表示
      $user_id = Auth::id();
      $task = Task::find($id);
      $task_id = $task['user_id'];
      if ($user_id == $task_id)
      {
        return view('tasks.edit',['task'=>$task]);
      }
      return redirect("/")->with('flash_message', '他のUserのTaskは編集できません。');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $task = Task::find($id);
      $task->name = $request->name;
      $task->description = $request->description;
      $task->save();
      return redirect("/")->with('flash_message', '更新が完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $task = Task::find($id);
      $task->delete();
      return redirect('/')->with('flash_message', '削除しました');
    }

    public function logout()
    {
      Auth::logout();
      return redirect('/')->with('flash_message', 'ログアウトしました。');
    }
}
