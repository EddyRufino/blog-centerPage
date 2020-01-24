<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function show(Post $post) {

      if ($post->isPublished() || auth()->check()) {

        return view('posts.show', compact('post'));
    }

	return view('posts.show', compact('post'));
      // abort(404); lo comente porque no podía ver el nuevo post que creaba y puse la linea de arriba

    }
}
