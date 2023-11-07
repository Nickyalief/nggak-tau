<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak; // Pastikan Anda mengganti 'Kontak' dengan model yang sesuai

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all(); // Gantilah 'Kontak' dengan model yang sesuai
        return view('kontak.index', compact('kontaks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'kontak' => 'required|numeric',
            'message' => 'required',
        ]);

        Kontak::create($request->all()); // Gantilah 'Kontak' dengan model yang sesuai

        return redirect('/kontak')->with('success', 'Pesan berhasil dikirim!');
    }
}
