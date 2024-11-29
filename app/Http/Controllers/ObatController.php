<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateObatsRequest;
use App\Models\Obat;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;


class ObatController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $obats = Obat::where('nama_obat', 'LIKE', '%' . $search . '%')
                    ->orWhere('jenis_obat', 'LIKE', '%' . $search . '%')
                    ->get();
    
        return view('bagian.obat', compact('obats', 'search'));
    }
    




    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input form
    $validatedData = $request->validate([
        'nama_obat' => 'required|string|max:255',
        'stok' => 'required|integer', // Mengubah text menjadi integer
        'jenis_obat' => 'required|string|max:255',
        'definisi' => 'required',
        'kegunaan' => 'required',
    ]);

    // Jika validasi sukses, buat data baru di tabel 'obats'
    Obat::create($validatedData);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('dashboard')->with('success', 'Obat berhasil ditambahkan.');
}



    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)   
    {
        return view('obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_obat)
    {
        // Menggunakan Eloquent untuk mencari data obat berdasarkan id_obat
        $obat = Obat::find($id_obat);
    
        // Jika data obat tidak ditemukan, abort 404
        if (!$obat) {
            abort(404);
        }
    
        // Tampilkan form edit dengan data obat yang ditemukan
        return view('obat.edit', compact('obat'));
    }
    


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_obat)

{

    // Validasi input

    $validatedData = $request->validate([
        'nama_obat' => 'required|string|max:255',
        'stok' => 'required|integer',
        'jenis_obat' => 'required|string|max:255',
        'definisi' => 'required',
        'kegunaan' => 'required',
    ]);



    // Cari obat berdasarkan id_obat

    $obat = Obat::findOrFail($id_obat);



    // Update data obat

    $obat->update($validatedData);



    // Redirect ke halaman dashboard dengan pesan sukses

    return redirect()->route('dashboard')->with('success', 'Obat berhasil diperbarui.');

}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_obat)
{
    $obat = Obat::findOrFail($id_obat);
    $obat->delete();

    return redirect()->route('dashboard')->with('success', 'Obat berhasil dihapus.');
}

public function createRequest()
{
    // Ambil semua data obat dari database
    $obats = Obat::all();

    // Tampilkan view form permintaan obat
    return view('bagian.permintaan', compact('obats'));
}

public function storeRequest(Request $request)
{
    // Validasi data permintaan
    $request->validate([
        'nama_obat' => 'required|exists:stock_obat,id_obat',
        'jumlah' => 'required|integer|min:1',
    ]);

    // Cari obat berdasarkan ID
    $obat = Obat::findOrFail($request->nama_obat);

    // Periksa apakah stok mencukupi
    if ($obat->stok < $request->jumlah) {
        return redirect()->back()->withErrors(['message' => 'Stok obat tidak mencukupi']);
    }

    // Kurangi stok obat
    $obat->stok -= $request->jumlah;
    $obat->save();

    return redirect()->route('permintaan-obat.create')->with('success', 'Permintaan obat berhasil diajukan, stok telah diperbarui.');
}

}