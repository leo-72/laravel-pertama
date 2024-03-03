@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <article class="mb-8">
            <h2 class="text-2xl font-bold">
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>
            <p class="text-base font-normal">{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection