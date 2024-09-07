<?php

namespace App\Http\Controllers;

use App\Models\Addpro;
use Illuminate\Http\Request;

class AddproController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addpro = Addpro::all();

        return view('admin.dashadmin', compact('dashadmin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pro.create');
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
        Addpro::create($validatedData);

        // return view('admin.dashboard');
        return redirect()->back()->with('success', 'Pesan berhasil di kirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(addpro $addpro)
    {
        return view('dashadmin.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(addpro $addpro)
    {
        return view('admin.addpro.edit', compact('addpro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, addpro $addpro)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);
    
        // Update data ke dalam tabel
        $addpro->update($validatedData);
    
        return redirect()->route('dashadmin.index')->with('success', 'Project berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(addpro $addpro)
    {
        $addpro->delete();

        return redirect()->route('dashadmin.index')->with('success', 'Add Project berhasil dihapus!');
    }
}
