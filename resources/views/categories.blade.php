@extends('layouts.main')

@section('container')

    @foreach ($categories as $category)
        <ul>
            <li>
                <h2 class="text-blue-500 font-bold"><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach

@endsection