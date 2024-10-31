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
use Illuminate\Support\Facades\Notification; // Import Notification facade
use App\Mail\PermintaanObatMail;
use App\Notifications\PermintaanObatNotification; // Make sure to import your notification class
use Illuminate\Support\Facades\Mail;




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
    // Validate incoming request
    $request->validate([
        'nama' => 'required',
        'kelas' => 'required',
        'jurusan' => 'required',
        'nama_obat' => 'required',
        'jumlah' => 'required|integer|min:1', // Ensure jumlah is an integer and at least 1
    ]);

    // Create the medicine request record
    $permintaan = permintaan_obat::create([
        'nama' => $request->nama,
        'kelas' => $request->kelas,
        'jurusan' => $request->jurusan,
        'nama_obat' => $request->nama_obat,
        'jumlah' => $request->jumlah,
    ]);

    // Prepare data for notification and mail
    $data = [
        'nama_obat' => $request->nama_obat,
        'jumlah' => $request->jumlah,
        'nama' => $request->nama,
        'kelas' => $request->kelas,
        'jurusan' => $request->jurusan,
    ];

    // Send notification
    $adminEmail = 'putrarahel241@gmail.com'; 
    Notification::route('mail', $adminEmail)
                ->notify(new PermintaanObatNotification($data));
    
    // Send email
    Mail::to($adminEmail)->send(new PermintaanObatMail($data));

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Permintaan obat berhasil dikirim!');
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
