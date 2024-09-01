<?php

namespace App\Http\Controllers;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();

        return view('admin.kontak', compact('kontak'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        // Simpan data ke dalam tabel
        Kontak::create($validatedData);

        // return view('admin.dashboard');
        return redirect()->back()->with('success', 'Pesan berhasil di kirim!');
    }

    public function dashboard()
    {
        // Ambil semua data dari tabel kontak
        $kontak = Kontak::all();

        // Oper data ke view
        return view('dashboard', compact('kontak'));
    }
}

