@extends("admin.layouts.app")

@section("content")

    <h1> HALO SELAMAT DATANG DI HALAMAN ADMIN</h1>

    <p>
        Email kamu adalah : {{ auth()->user()->email . auth()->user()->name }}
    </p>

@endsection