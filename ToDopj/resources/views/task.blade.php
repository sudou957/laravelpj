@extends('layouts.hello')
<style>
  div {
    background-color: white;
    color: black;
    margin: 20px 50px;
    padding: 10px;
  }

  table {
    background-color: white;
    color: black;
  }

  form {
    background-color: white;
    color: black;
    margin: 20px auto;
  }

  .text {
    padding: 0 100px;
  }

  .buton {
    background-color: white;
    color: purple;
    border: solid 1px purple;
  }

  .update {
    background-color: white;
    color: orange;
    border: solid 1px orange;
  }

  .del {
    background-color: white;
    color: blue;
    border: solid 1px blue;
  }
</style>
@section('COACHTECH', 'task.blade.php')


<!--タスク入力フォーム-->
<h1>TODOリスト</h1>
<div>
  <form action="/todo/create" method="POST">
    @csrf
    <input class="text" type="text" name="content">
    <input class="buton" name="create" type="submit" value="追加">
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
        <input type="hidden" name="id" value="{{$item->id}}">
        <td><input type="text" name="content" value="{{$item->getDate()}}"></td>
        <td>
          <input class="update" type="submit" value="更新">
        </td>
      </form>
      <td>
        <form action="/todo/delete" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{$item->id}}">
          <input class="del" type="submit" value="削除">
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</div>