<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Middleware auth memastikan hanya user yang terautentikasi yang bisa mengakses
        $this->middleware('auth');
    }

    public function index()
    {
        // Mengambil semua data dari model Obat
        $obats = Obat::all();

        // Mengirim data ke view admin.dashboard
        return view('admin.dashboard', compact('obats'));
    }
}
