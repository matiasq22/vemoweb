@extends('layout')

@section('title', "Usuario {$user->id} ")

<h1>Usuario {{ $user->id }}</h1>
@section('content')

      Mostrando detalle del user: {{ $user->id }}

@endsection
