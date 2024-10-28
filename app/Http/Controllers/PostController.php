<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use http\Exception;
use Ramsey\Uuid\Type\Integer;

class PostController extends Controller
{

//    public function index()
//    {
//        $posts = Post::all();
//        return view('post.index', compact('posts'));
//    }

//    public function create()
//    {
//        return view('post.create', ['post' => new Post()]);
//    }

//    public function store()
//    {
//        $data = request()->validate([
//            'title' => 'string',
//            'content' => 'string',
//        ]);
//
//        Post::create($data);
//        return redirect()->route('post.index');
//    }

//    public function show(Post $post)
//    {
//        return view('post.show', compact('post'));
//    }

//    public function edit(Post $post)
//    {
//        return view('post.edit', compact('post'));
//    }

//    public function update(Post $post)
//    {
//        $data = request()->validate([
//            'title' => 'string',
//            'content' => 'string'
//        ]);
//
//        $post->update($data);
//        return redirect()->route('post.show', $post->id);
//    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function restore(): void
    {
        $post = Post::withTrashed()->find(1);
        $post->restore();
        dd('restored');
    }


    // firstOrCreate
    public function firstOrCreate(): void
    {
        $post = Post::firstOrCreate(
            ['title' => 'some title phpstorm'],
            [
                'title' => 'some title phpstorm',
                'content' => 'some content',
                'likes' => 5000,
                'is_published' => true,
            ]
        );

        dump($post->content);
        dd('finished');
    }

    // updateOrCreate
    public function updateOrCreate(): void
    {
        $post = Post::updateOrCreate(
            ['title' => 'some title phpstorm'],
            [
                'title' => 'update or create some title phpstorm',
                'content' => 'update or create some content',
                'likes' => 500,
                'is_published' => true,
            ]
        );

        dump($post->content);
        dd('finished');
    }

}
