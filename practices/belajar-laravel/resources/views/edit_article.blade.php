@extends('layouts.app')

@section('content')
    <div class="shadow p-3">
        <h2> Edit article</h2>
        <form action="/edit-article/{{ $article->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="emailHelp"
                    value="{{ $article->title }}">
            </div>
            <div class="mb-3">
                <label for="inputImage" class="form-label">Image</label>
                <input name="image" type="text" class="form-control" id="inputImage" aria-describedby="emailHelp"
                    value="{{  $article->image }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $article->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>
@endsection