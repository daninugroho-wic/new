<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('admin.kontak', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(kontak $kontak)
    {
        return view('kontak.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kontak $kontak)
    {
        return view('admin.kontak.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kontak $kontak)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);
    
        // Update data ke dalam tabel
        $kontak->update($validatedData);
    
        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kontak $kontak)
    {
        $kontak->delete();

        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil dihapus!');
    }
}



// public function dashboard()
// {
//     // Ambil semua data dari tabel kontak
//     $kontak = Kontak::all();

//     // Oper data ke view
//     return view('dashboard', compact('kontak'));
// }