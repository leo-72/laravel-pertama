@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2 class="text-4xl font-bold mb-5">{{ $post->title }}</h2>

        <h3 class="mb-3 text-xl font-normal">By. <a href="/authors/{{ $post->author->username }}" class="text-blue-600 font-bold">{{ $post->author->name }}</a> in <a class="text-blue-600 font-bold" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h3>

        {!! $post->body !!}
    </article>

    <a href="/posts" class="text-gray-900 border border-gray-700 hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-base font-medium">Back to Blog</a>
@endsection