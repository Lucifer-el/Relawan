<?php

namespace App\Http\Controllers;

use App\Models\permintaan;
use App\Http\Requests\StorepermintaanRequest;
use App\Http\Requests\UpdatepermintaanRequest;
use App\Http\Resources\PermintaanResource;
use App\Models\permintaan_obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Obat;




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
        $obats = Obat::all();
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
        
            permintaan_obat::create([

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(permintaan_obat $permintaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(permintaan_obat $permintaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepermintaanRequest $request, permintaan_obat $permintaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(permintaan_obat $permintaan)
    {
        //
    }
}
