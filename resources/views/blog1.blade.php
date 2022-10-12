{{-- @add($post) cara melihat isi dan tipe data dari sebuah variable--}}

@extends('layouts.main')

@section('container')
<article class="mb-5">
    @foreach ($blog_posts as $post)
    <h2>
        <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
    </h2>
    {{-- <h5>{{ $post["author"] }}</h5> --}}
    <p>{{ $post->body }}</p>
    @endforeach
</article>
    
@endsection