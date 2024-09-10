<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller {
    public function index() {
        $kontak = Kontak::orderBy( 'id', 'desc' )->get();
        $total = Kontak::count();
        return view( 'admin.kontak', compact( 'kontak', 'total' ) );
    }
    //aman

    public function indexs() {
        return view( 'admin.contoh' );
    }
    //aman

    public function save( Request $request ) {
        $validation = $request->validate( [
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ] );

        $data = Kontak::create( $validation );
        if ( $data ) {
            session()->flash( 'success', 'Product Add Successfully' );
            return redirect( route( 'dashboard' ) );
        } else {
            session()->flash( 'error', 'Some problem occurred' );
            return redirect( route( 'dashboard.create' ) );
        }
    }
    //aman

    public function edit( $id ) {
        $kontak = Kontak::findOrFail( $id );
        return view( 'admin.update', compact( 'kontak' ) );
    }
    //aman

    public function update( Request $request, $id ) {
        $request->validate( [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ] );

        $kontak = Kontak::findOrFail( $id );
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;
        $kontak->pesan = $request->pesan;
        $kontak->save();

        if ( $kontak ) {
            session()->flash( 'success', 'Kontak Berhasil Diupdate' );
            return redirect()->route( 'admin.kontak.index' );
        } else {
            session()->flash( 'error', 'Terjadi masalah saat update' );
            return redirect()->route( 'admin.kontak.edit', [ 'id' => $id ] );
        }
    }
    //aman

    public function delete( $id ) {
        $kontak = Kontak::findOrFail( $id )->delete();
        if ( $kontak ) {
            session()->flash( 'success', 'Product Successfully Deleted' );
            return redirect( route( 'admin.kontak' ) );
        } else {
            session()->flash( 'error', 'Product Deletion Failed' );
            return redirect( route( 'admin.kontak' ) );
        }
    }

    public function store( Request $request ) {
        $validatedData = $request->validate( [
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'pesan' => 'required',
        ] );

        Kontak::create( $validatedData );


        return redirect()->back()->with( 'success', 'Pesan berhasil di kirim!' );
    }

    public function show( kontak $kontak ) {
        return view( 'kontak.show' );
    }
}