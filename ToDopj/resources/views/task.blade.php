@extends('layouts.hello')
<style>
  form {
    background-color: white;
    color: black;
    margin: 20px auto;
  }
</style>
@section('COACHTECH', 'task.blade.php')


<!--タスク入力フォーム-->
<h1>TODOリスト</h1>
<form action="task" method="POST">
  <input type="text" name="content">
  <input type="submit" value="追加">
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
      <td>{{$item->getDate()}}</td>
      <td><input type="submit" value="更新"></td>
      <td><input type="submit" value="削除"></td>
    </tr>
    @endforeach
  </table>
</form>