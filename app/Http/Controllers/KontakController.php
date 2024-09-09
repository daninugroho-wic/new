<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        $kontak = Kontak::all();
        return view( 'admin.kontak', compact( 'kontak' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        $validatedData = $request->validate( [
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'pesan' => 'required',
        ] );

        // Simpan data ke dalam tabel
        Kontak::create( $validatedData );

        // return view( 'admin.dashboard' );
        return redirect()->back()->with( 'success', 'Pesan berhasil di kirim!' );
    }

    /**
    * Display the specified resource.
    */

    public function show( kontak $kontak ) {
        // return view( 'kontak.show' );
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( $id ) {
        $kontak = Kontak::findOrFail( $id );
        return view( 'admin.kontak.update', compact( 'kontak' ) );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, $id ) {
        // Validasi data
        $request->validate( [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ] );

        // Temukan kontak berdasarkan ID
        $kontak = Kontak::findOrFail( $id );

        // Update nilai kontak
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;
        $kontak->pesan = $request->pesan;

        // Simpan perubahan
        $kontak->save();

        // Cek jika berhasil diupdate dan redirect
        if ( $kontak ) {
            session()->flash( 'success', 'Kontak Berhasil Diupdate' );
            return redirect()->route( 'admin.kontak.index' );
            // redirect ke daftar kontak
        } else {
            session()->flash( 'error', 'Terjadi masalah saat update' );
            return redirect()->route( 'admin.kontak.edit', [ 'id' => $id ] );
            // kembali ke halaman edit
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( kontak $kontak ) {
        //
    }
}