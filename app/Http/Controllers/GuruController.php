<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all(); // Mengambil semua data siswa
        return view('guru.index', compact('gurus'));
    }
}
