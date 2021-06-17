<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = todo::select('content');
        return view('task', ['items' => $items]);
    }
    public function add(Request $request)
    {
        return view('create');
    }
    public function create(Request $request)
    {
        $this->validate($request, todo::$rules);
        $todo = new todo;
        $form = $request->select('content');
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $todo = todo::find($request->content);
        return view('todo.edit', ['form' => $todo]);
    }
    public function update(Request $request)
    {
        $this->validate($request, todo::$rules);
        $todo = todo::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $todo = todo::find($request->id);
        return view('todo.delete', ['form' => $todo]);
    }
    public function remove(Request $request)
    {
        todo::find($request->id)->delete();
        return redirect('/');
    }
}
