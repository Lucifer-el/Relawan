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

    public function index(Request $request)
    {
        $obats = Obat::all();
    return view('admin.dashboard', compact('obats'));
    }

    
 
}
