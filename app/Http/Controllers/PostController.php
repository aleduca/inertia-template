<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function show(Post $post)
  {
    $post = $post->load('author', 'category', 'comments.user', 'tags');
    $categories = Category::latest()->limit(5)->get();
    return inertia('Post/Show', [
      'post' => $post,
      'categories' => $categories,
    ]);
  }
}
