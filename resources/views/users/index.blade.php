@extends('layout')

@section('title', 'Usuarios')

@section('content')

    <h1>{{ $title }}</h1>

    <ul>
      @forelse($users as $user)
          <li>
            {{ $user->name }}
            <a href="{{ url("/users/{$user->id}") }}">Ver detalles</a>
          </li>
          
      @empty
          <li> No hay usuarios registrados</li>
      @endforelse

    </ul>
@endsection

@section('sidebar')
    @parent

    <h2>Barra Lateral Perzonalizada! </h2>
@endsection
