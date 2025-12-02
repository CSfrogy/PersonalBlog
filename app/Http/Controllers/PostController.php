<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.posts');
    }

    public function show(Post $post)
    {
        return 'Post details coming soon!';

    }


}
