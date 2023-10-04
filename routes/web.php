<?php

use App\Http\Controllers\tryy;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home', [
        "title" => "Home Page",
        "active" => "homepage"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Raditya Yusuf Aslam",
        "email" => "raditya@gmail.com",
        "image" => "ucup.jpeg"
    ]);
});



Route::get('/blog', [PostController::class, 'index' ]);

Route::get('/tryy/{$id}', [tryy::class, 'print']);

Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (){
    return view ('categories', [
        'title' => "Post Categories",
        'active' => "categories",
        'categories' => Category::all()
    ]);
});