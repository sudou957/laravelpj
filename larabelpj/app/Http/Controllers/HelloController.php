<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloController extends Controller
{
    public function index()
    {
        return  "建物です";
    }
    public function room($id)
    {
        $data = ['id' => $id];
        return view('room', $data);
    }
    public function post(Request $request)
    {
        $rules = [
            'txt' => 'required',
        ];
        $this->validate($request, $rules);
        $txt = $request->txt;
        $response = response()->view('hello.index', ['txt' => $txt . 'クッキーに保存しました']);
        $response->cookie('txt', $txt, 100);
        return $response;
    }
}
