<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
    //Logic
    public function index()
    {
        // jika function/method dipanggil, berikan kembalian dari function view nya laravel
        // view dari file posts.blade.html dengan disertai beberapa parameter array
        // dan kirimkan juga data dari static funtion all() yang ada di file Model Post.php
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
        "title" => "All Posts".$title,
        "active" => "blog",
        "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
    ]);
    }

    public function show(Post $post)
    {
        return view('post',[
    "title" => $post->title,
    "active" => "blog",
    "post" => $post
]);
    }
}