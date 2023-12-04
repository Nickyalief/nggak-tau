<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Added for Auth facade
use App\Models\User; // Added for User model

class UserController extends Controller
{
    use AuthenticatesUsers;

    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->only('email', 'password'); // Fixed variable name

        if (Auth::attempt($credentials)) {
            return redirect("/posts");
        } else {
            return redirect()->route("login")->with("error", "Email dan password tidak ditemukan di sistem");
        }
    }

    public function doLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Anda berhasil keluar dari sistem'); // Fixed route name
    }

    public function createSample()
    {
        User::create([
            'email' => 'kerani@gmail.com',
            'password' => bcrypt('kerani123') // Hash the password
        ]);
        echo "user telah berhasil";
    }
}
