@extends('layouts.main')

@section('container')

    <h1 class="text-4xl mb-12 font-extrabold">{{ $head_title }}</h1>

    @foreach ($posts as $post)
        <article class="mb-8 border-b-2">
            <h2 class="text-2xl font-bold mb-5">
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="mb-2 text-lg font-normal">By. <a href="/authors/{{ $post->author->username }}" class="text-blue-600 font-bold">{{ $post->author->name }}</a> in <a class="text-blue-600 font-bold" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

            <p class="text-base font-normal mb-8">{{ $post->excerpt }} <a href="/posts/{{ $post->slug }}" class="text-blue-500">read more...</a></p>
        </article>
    @endforeach

@endsection