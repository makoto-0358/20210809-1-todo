@extends('layouts.default')
<style>

</style>

@section('content')
@if(count($errors)>0)
<ul>
  @foreach($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<h2>Todo List</h2>
<form id="create" action="todo/create" method="post">
@csrf
  <input type="text" name="content">
  <button type="submit" form="create">追加</button>
</form>
<table>
  <tr>
    <th class=create_at>作成日</th>
    <th class=task>タスク名</th>
    <th class=update_at>更新</th>
    <th class=delete>削除</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td class=create_at>{{$item->created_at}}</td>
    <td class=task>
      <form id="update" action="todo/update" method="post">
      @csrf
        <input type="hidden" name="id" value="{{$item->id}}">
        <input type="text" name="content" value="{{$item->content}}">
      </form>
    </td>
    <td class=update_at>
      <button type="submit" form="update" class=update-button>更新</button>
    </td>
    <td class=delete>
      <form id="delete" action="todo/delete" method="post">
      @csrf
        <input type="hidden" name="id" value="{{$item->id}}">
        <button type="submit" form="delete" class=delete-button>削除</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection