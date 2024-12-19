<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController
{
    public function index()
    {
        $posts = Post::paginate(5);

        return PostCollection::make($posts);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return PostResource::make($post);
    }
}
