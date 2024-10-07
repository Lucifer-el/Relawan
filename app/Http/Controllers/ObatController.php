<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObatsRequest;
use App\Http\Requests\UpdateObatsRequest;
use App\Models\Obat;

class ObatController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obats = Obat::all();
        return view('bagian.obat', compact('obats'));
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
    public function store(StoreObatsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateObatsRequest $request, Obat $obats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obats)
    {
        //
    }
}
