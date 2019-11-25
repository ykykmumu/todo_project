<!DOCTYPE HTML>
<html>
<head>
    <title>ToDoリスト</title>
</head>
<body>

<h1>TODOリスト</h1>
<br>
<input type="radio">すべて
<input type="radio">作業中
<input type="radio">完了


@isset($todos)
@foreach ($todos as $todos)
<table>
 <tr>
  <th>ID</th>
  <th>コメント</th>
  <th>状態</th>
  </tr>
  <tr>
  <th>{{ $todos->id }}</th>
  <th>{{ $todos->comment }}</th>
  <th> <button class="">作業中</button></th>
  <th> <button class="">削除</button></th>
  </tr>
</table>
@endforeach
@endisset


<h2>新規タスクの追加</h2>
<form action="/todos" method="POST">
    
    <textarea name="comment" rows="1" cols="25"></textarea>
    
    {{ csrf_field() }}
    <button class="btn"> 追加 </button>
</form>

</body>
</html>