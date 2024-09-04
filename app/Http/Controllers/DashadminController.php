<?php

namespace App\Http\Controllers;

use App\Models\dashadmin;
use Illuminate\Http\Request;

class DashadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashadmin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(dashadmin $dashadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dashadmin $dashadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dashadmin $dashadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashadmin $dashadmin)
    {
        //
    }
}
