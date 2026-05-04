@extends("layouts.app")

@section("content")
    <h2 class="text-center">Create New Article</h2>
    hr
        <div class="shadow p-3">
            <form action="/articles" method="POST" enctype="miltipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="inputImage" class="form-label">Image</label>
                    <input name="image" type="file" class="form-control" id="inputImage" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <a href="/articles" class="btn btn-danger">Back To Article</a>
                <button type="submit" class="btn btn-primary">Save Article</button>
            </form>

        </div>

@endsection