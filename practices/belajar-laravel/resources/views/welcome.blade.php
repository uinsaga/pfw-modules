@extends('layouts.app')

@section('content')

    <div class="shadow p-3">
        <h2> Buat article Baru</h1>
            <form action="/create-article" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="inputImage" class="form-label">Image</label>
                    <input name="image" type="text" class="form-control" id="inputImage" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save Article</button>
            </form>

    </div>
    <hr />
    <h1>My Article</h1>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


        @foreach ($articleList as $article)

            <div class="col mb-5">
                <div class="card h-25">
                    <!-- Product image-->
                    <img class="card-img-top " src="{{ $article->image }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $article->title  }}</h5>
                            <!-- Product price-->
                            <p>
                                {{ $article->description }}
                            </p>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="/edit-article/{{ $article->id }}">Edit Artikel</a></div>
                        <form action="/delete-article/{{ $article->id }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <div class="text-center">
                                <button class="btn btn-danger">Delete Artikel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        @endforeach




    </div>
@endsection