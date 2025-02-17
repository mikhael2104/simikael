<?php

namespace App\Http\Controllers;

use App\Models\AjuanPkl;
use Illuminate\Http\Request;

class AjuanPklController extends Controller
{
    public function index()
    {
        $ajuan_pkls = AjuanPkl::all(); // Mengambil semua data siswa
        return view('ajuan_pkl.index', compact('ajuan_pkls'));
    }
}
