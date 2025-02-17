<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;
use App\Models\Siswa;

class IndustriController extends Controller
{
    public function index()
    {
        $industris = Industri::all(); // Mengambil semua data siswa
        return view('industri.index', compact('industris'));
    }
}

