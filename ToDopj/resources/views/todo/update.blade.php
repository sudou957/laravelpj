@extends('layouts.hello')
<style>
  form {
    background-color: white;
    color: black;
    margin: 20px auto;
  }
</style>
@section('COACHTECH', 'update.blade.php')

@seciton('content')
if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/update" method="POST">
  @csrf
  <input type="text" name="content">
  <input type="submit" value="追加">
  <table>
    <tr>
      <th>
        作成日
      </th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    <tr>
      <td><input type="text" name="content" value="{{$form->content}}"></td>
      <td><input type="submit" value="更新"></td>
      <td><input type="submit" value="削除"></td>
    </tr>
  </table>
</form>
@endsection