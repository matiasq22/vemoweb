@extends('layout')

@section('title', "Usuario {$user->id} ")

@section('content')
  <h1>Usuario {{ $user->id }}</h1>

  <p>Nombre del usuario: {{ $user->name }}</p>
  <p>Correo electronico: {{ $user->email }}</p>

  <p>
    <a href="{{ url("/users")}}">Back to users</a>
  </p>
@endsection
