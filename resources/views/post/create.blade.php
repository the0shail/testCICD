@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="title" class="mb-1">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group mb-3">
                <label for="content" class="mb-1">Content</label>
                <textarea name="content" type="text" class="form-control" id="content" placeholder="Content"></textarea>
            </div>
            <select name="category_id" class="form-select mb-3" aria-label="Category">
                @foreach($categories as $category )
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
