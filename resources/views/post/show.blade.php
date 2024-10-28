@extends('layouts.main')
@section('content')
    <div class="mb-3">
        <div>{{ $post->id }}. {{ $post->title }}</div>
        <div>{{ $post->content }}</div>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}">Edit</a>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" href="{{ route('post.delete', $post->id) }}" type="submit">Delete</button>
        </form>
        <a class="btn btn-primary" href="{{ route('post.index') }}">Back</a>
    </div>
@endsection
