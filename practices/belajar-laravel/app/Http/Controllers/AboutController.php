<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "name" => "Mulyono",
            "address" => "Solo",
            "email" => "mulyono@gmail.co",
            "univ" => "UGM?"
        ];

        return view('about', compact('data'));
    }

    public function calculateSquare($p, $l)
    {
        return "Luas persegi adalah p x l: " . $p * $l;
    }
}
