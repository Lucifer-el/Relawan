<?php

namespace App\Http\Controllers;

use App\Models\Obats;
use App\Http\Requests\StoreObatsRequest;
use App\Http\Requests\UpdateObatsRequest;

class ObatController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obats = Obat::all();
        return view('obat.index', compact('obats'));
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
    public function show(Obats $obats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obats $obats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateObatsRequest $request, Obats $obats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obats $obats)
    {
        //
    }
}
