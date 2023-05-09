<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use App\Models\Category;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index',compact('todos')); //compact関数は、viewに変数を送信することができます。ここでは $todos をviews側に送り出しています。
    }

    public function store(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        Todo::create($todo); //indexアクションでは、allメソッドを使用することでtodosテーブルを全て取得し、 $todosに格納しています。

        return redirect('/')->with('message', 'Todoを作成しました'); //redirectメソッドに対してwithメソッドを活用すると、セクションに値が保存されます
    }

    public function update(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        Todo::find($request->id)->update($todo);

        return redirect('/')->with('message', 'Todoを更新しました');

    }
    public function destroy(Request $request)
    {
        Todo::find($request->id)->delete();

        return redirect('/')->with('message', 'Todoを削除しました');
    }

}
