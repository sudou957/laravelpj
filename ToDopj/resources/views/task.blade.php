@extends('layouts.hello')
<style>
  form {
    background-color: white;
    color: black;
    margin: 20px 50px;
    padding: 10px;
  }

  table {
    background-color: white;
    color: black;
    margin: 50px;
  }
</style>
@section('COACHTECH', 'task.blade.php')


<!--タスク入力フォーム-->
<h1>TODOリスト</h1>
<form action="/todo/create" method="POST">
  @csrf
  <input type="text" name="content">
  <input name="create" type="submit" value="追加">
</form>
<!--タスク入力フォームここまで-->
<table>
  <tr>
    <th>
      作成日
    </th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->created_at}}</td>
    <form action="/todo/update" method="POST">
      @csrf
      <td><input type="text" name="content" value="{{$item->getDate()}}"></td>
      <td>
        <input type="submit" value="更新">
      </td>
    </form>
    <td>
      <form action="/todo/delete" method="POST">
        @csrf
        <input type="submit" value="削除">
      </form>
    </td>
  </tr>
  @endforeach
</table>
</form>