@extends('layouts.app')

@section('content')
    <h1>About ME</h1>
    <p>Nama:  {{ $data['name'] }}</p>
    <p>Alamat: {{ $data["address"] }}</p>
    <p>Kampus: {{ $data['univ'] }}</p>
    <p>Email: {{ $data["email"] }}</p>
@endsection
