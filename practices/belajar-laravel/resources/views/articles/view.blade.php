@extends("layouts.app")

@section("content")


    @if($article != null)

        {{-- JUDUL ARTIKEL --}}
        <h1>{{ $article->title }}</h1>
        {{-- IMAGE ARTICLE --}}
        <div class="image">
            <img src="{{ $article->image }}" class="image-responsive" />
        </div>
        {{-- DESCRIPTION --}}
        <p>
            {{ $article->description }}
        </p>


    @else

        <h1>Data not found!</h1>

    @endif

    <hr>


    <a href="/articles" class="btn btn-primary">Back to articles</a>
    {{-- BACK TO ARTICLE --}}



@endsection