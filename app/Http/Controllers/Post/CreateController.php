<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('post.create', ['post' => new Post(), 'categories' => Category::all()]);
    }
}
