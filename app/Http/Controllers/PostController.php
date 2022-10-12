<?php

namespace App\Http\Controllers;

// akses data yang ada di Models
use App\Models\Post;


use Illuminate\Http\Request;



class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "blog_posts" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}