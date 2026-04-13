<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $data = [
        "name" => "Jehan Afwazi Ahmad",
        "address" => "Temanggung",
        "email" => "jehan.afwazi@gmail.co",
        "univ" => "UINSAGA"
    ];

    return view('about', compact('data'));
});

Route::get('login', function () {
    return view('auths.login');
});
