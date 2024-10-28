@extends('layouts.main')
@section('content')
    <div>
        @foreach($posts as $post)
            <div><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}, {{ $post->title }}</a></div>
        @endforeach

        <div class="mt-3">
            <a class="btn btn-primary" href="{{ route('post.create') }}">Add One</a>
        </div>
    </div>
@endsection
