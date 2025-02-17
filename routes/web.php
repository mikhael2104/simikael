<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruPDFController;
use App\Http\Controllers\SiswaPDFController;
use App\Http\Controllers\AjuanPklPDFController;
use App\Http\Controllers\IndustriPDFController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/download-siswa', [SiswaPDFController::class,'generate'])->name('download-siswa-pdf');
Route::get('/download-ajuan-pkl', [AjuanPklPDFController::class,'generate'])->name('download-ajuan-pkl-pdf');
Route::get('/download-industri', [IndustriPDFController::class,'generate'])->name('download-industri-pdf');
Route::get('/download-guru', [GuruPDFController::class,'generate'])->name('download-guru-pdf');
