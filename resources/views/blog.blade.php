@extends('layouts.main')

@section('container')
    @foreach ($blog_posts as $post)
    <article>
      <h2>
        <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
      </h2>
      <p>
        {{ $post->slug }}
      </p>
      <p>
        {{ $post->excerpt }}
      </p>
    </article> 
    @endforeach
@endsection