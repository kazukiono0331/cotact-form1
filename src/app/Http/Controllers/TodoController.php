<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index',compact('todos')); //compact関数は、viewに変数を送信することができます。ここでは $todos をviews側に送り出しています。
    }

    public function store(Request $request)
    {
        $todo = $request->only(['content']);
        Todo::create($todo); //indexアクションでは、allメソッドを使用することでtodosテーブルを全て取得し、 $todosに格納しています。
        return redirect('/');
    }
}
