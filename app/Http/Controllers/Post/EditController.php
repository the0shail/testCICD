<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        return view('post.edit', ['post' => $post, 'categories' => Category::all()]);
    }
}
