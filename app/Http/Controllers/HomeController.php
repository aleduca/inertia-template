<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
  public function index()
  {
    $posts = Post::with('category')->latest()->limit(3)->get();
    return inertia('Home/Index', [
      'posts' => $posts
    ]);
  }
}
