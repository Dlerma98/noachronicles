<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('author', 'categories')->latest()->paginate(10); // Paginación
        return view('posts.index', compact('posts'));
    }
}
