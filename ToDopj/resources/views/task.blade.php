@extends('layouts.hello')
<style>
  form {
    background-color: white;
    color: black;
    margin: 20px 20px;
  }
</style>
@section('COACHTECH', 'task.blade.php')


<!--タスク入力フォーム-->
<h1>TODOリスト</h1>
<form action="/todo/create" method="POST">
  <input type="text" name="content">
  <button name="create" type="submit">追加</button>

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
      <td><input type="text" name="content" value="{{$item->getDate()}}"></td>
</form>
<form action="/todo/update" method="POST"></form>
<td><input name="update" type="submit" value="更新"></td>
</form>
<form action="/todo/delete" method="post"></form>
<td><input name="delete" type="submit" value="削除"></td>
</form>
</tr>
@endforeach
</table>
@csrf
</form>