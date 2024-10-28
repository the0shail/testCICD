<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{
    public function store($data): void
    {
        Post::create($data);
    }

    public function update($post, $data): void
    {
        $post->update($data);
    }
}
