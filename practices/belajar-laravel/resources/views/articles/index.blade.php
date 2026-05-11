@extends("layouts.app")

@section("content")

    <h1>My Article</h1>

    <div class="mb-5">
        <a href="/articles/create" class="btn btn-primary">Add New Article</a>
    </div>
    <div class="row">
        @foreach ($articleList as $article)

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <h4 class="text-center"><span class="label label-info">{{ $article->title }}</span></h4>
                    <img src="storage/{{ $article->image }}" class="img-thumbnail">
                    <div class="caption">
                        <p>{{ $article->description }}</p>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/articles/{{ $article->id }}" class="btn btn-success "><span class="glyphicon glyphicon-thumbs-up"></span>
                                    Show</a>
                            </div>
                            <div class="col-md-4">
                                <a href="/articles/edit/{{ $article->id }}" class="btn btn-primary"><span
                                        class="glyphicon glyphicon-thumbs-up"></span>
                                    Edit</a>
                            </div>
                            <div class="col-md-4">
                                <form action="/articles/{{ $article->id }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>

                        <p> </p>
                    </div>
                </div>
            </div>

            {{-- <div class="col mb-5"> --}}
                {{-- <div class="card" style="width: 18rem;">
                    <img src="{{ $article->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text"> {{ $article->description }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> --}}
                {{-- <div class="card h-25">
                    <!-- Product image-->
                    <img class="card-img-top " src="{{ $article->image }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $article->title }}</h5>
                            <!-- Product price-->
                            <p>
                                {{ $article->description }}
                            </p>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="/articles/edit/{{ $article->id }}">Edit Artikel</a></div>
                        <form action="/delete-article/{{ $article->id }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <div class="text-center">
                                <button class="btn btn-danger">Delete Artikel</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
                {{-- </div> --}}

        @endforeach




    </div>

@endsection