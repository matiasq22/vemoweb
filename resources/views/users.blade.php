<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de usuarios</title>
  </head>
  <body>

    <h1>{{ $title }}</h1>

    <ul>
         @foreach ($users as $user)
            <li>{{$user}}</li>
         @endforeach
  </body>
</html>
