<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request)
    {

        $newUser = $request->validate([
            "name" => "required|string",
            "email" => "required|email|min:6",
            "password" => "required|confirmed|min:6"
        ]);

        $newUser["password"] = Hash::make($newUser['password']);
        $isSaved = User::create($newUser);

        if (!$isSaved) {
            return redirect()->back()->withErrors("registration failed.");
        }

        return redirect("/login")->with("success", "Thanks for your registration");
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            "email" => "required|email|min:6",
            "password" => "required|string|min:6"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/admin");
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput("email");
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect("/");
    }
}
