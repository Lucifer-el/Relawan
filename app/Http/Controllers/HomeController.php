<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use http\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('realindex');
    }
}
