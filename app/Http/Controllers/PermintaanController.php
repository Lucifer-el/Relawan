<?php

namespace App\Http\Controllers;

use App\Models\permintaan;
use App\Http\Requests\StorepermintaanRequest;
use App\Http\Requests\UpdatepermintaanRequest;
use App\Http\Resources\PermintaanResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Obats;



class PermintaanController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $obats = Obats::all();
        return view("permintaan.create", compact("obats"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepermintaanRequest $request)
    {
        $request->validate([
            "nama"=> "required",
            "kelas"=> "required",
            "jurusan"=> "required",
            "nama_obat"=> "required",
            "jumlah"=> "required"
            ]);
        
            permintaan::create([

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(permintaan $permintaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(permintaan $permintaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepermintaanRequest $request, permintaan $permintaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(permintaan $permintaan)
    {
        //
    }
}
