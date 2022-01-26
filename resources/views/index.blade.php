<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://kit.fontawesome.com/87e6f778eb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <section class="todolist__contents">
      <h3 class="todolist__title">TODO LIST</h3>
      <form action="/" method="POST" class="todo__form">
        @csrf
        <input type="text" name="todo" class="todo__input">
        <input type="submit" value="+" class="todo__add__btn">
      </form>

      <ul class="todolist" id="todolist">
        @foreach ($todos as $todo)
        <li class="todo-{{ $todo->id }}">{{ $todo->todo }} 
          <i class="fas fa-trash-alt todo__ope__icon" data-delete-id="{{ $todo->id }}" @click="deleteTodo"></i>
        </li>
        @endforeach
      </ul>
  </section>

  <div id="app">
    <todolist-component></todolist-component>
  </div>

  <script src="{{ asset('js/app.js') }}" defer="defer"></script>
</body>
</html>