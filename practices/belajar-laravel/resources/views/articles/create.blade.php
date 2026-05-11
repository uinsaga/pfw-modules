@extends("layouts.app")

@section("content")
    <h2 class="text-center">Create New Article</h2>

    <div class="shadow p-3">
        <form action="/articles" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="inputTitle"
                    aria-describedby="emailHelp" value="{{ old('title') }}" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputImage" class="form-label">Image</label>
                <input name="image" type="file" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror" id="inputImage"
                    aria-describedby="emailHelp" required>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ old("description") }}</textarea>
            </div>
            <a href="/articles" class="btn btn-danger">Back To Article</a>
            <button type="submit" class="btn btn-primary">Save Article</button>
        </form>

    </div>

@endsection