@extends('layout')

@section('title', "Create User")

@section('content')
  <h1>Create User </h1>

  <form method="POST" action="{{ url('users/create')}}">
    {!! csrf_field() !!}

    <button type="submit">Create</button>

  </form>
    {{-- <p>
      <a href="{{ route('users.index') }}"> Back to Users </a>
    </p> --}}

@endsection
