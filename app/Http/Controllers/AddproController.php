<?php

namespace App\Http\Controllers;

use App\Models\addpro;
use Illuminate\Http\Request;

class AddproController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('addpro.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addpro.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(addpro $addpro)
    {
        return view('addpro.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(addpro $addpro)
    {
        return view('addpro.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, addpro $addpro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(addpro $addpro)
    {
        //
    }
}
