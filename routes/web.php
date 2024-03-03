<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home',['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', 
    [
        "name" => "Nadhif S S",
        "email" => "fihdanps@gmail.com",
        "image" => "gojo.jpeg",
        "title" => "About",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'head_title' => 'Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'head_title' => "Posts by Category : $category->name",
        'title' => $category->name,
        'posts' => $category->posts->load(['category','author']),
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'head_title' => "Post by Author : $author->name",
        'title' => $author->name,
        'posts' => $author->posts->load(['category','author']),
    ]);
});