
@extends('layouts.main')

@section('container')
   <article>

        <h2>{{ $post->title }}</h2>
        {{-- cara mengakses table join antara post & category --}}
        <p>by : Zidan Dai <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p> 
        {{-- escape model --}}
        <p>{!! $post->body !!}</p>

    </article>
    <a href="/blog">kembali ke halaman sebelumnya</a>
@endsection