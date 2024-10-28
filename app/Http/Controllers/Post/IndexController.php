<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $post = Post::find(1);
        $category = Category::find(1);
//        dd($category->post);
//        dd($post->category);

        $tag = Tag::find(1);
        dd($tag->posts);

        return view('post.index', ['posts' => Post::all()]);
    }
}
