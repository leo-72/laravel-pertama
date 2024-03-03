@extends('layouts.main')

@section('container')
    <h1 class="text-3xl font-bold">Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
@endsection