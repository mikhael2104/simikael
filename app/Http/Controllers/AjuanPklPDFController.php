<?php

namespace App\Http\Controllers;

use App\Models\AjuanPkl;
use Illuminate\Http\Request;
use FPDF;

class AjuanPklPDFController extends Controller
{
    public function generate()
    {
        if (!auth()->check()) {
            abort(403, 'Anda harus login untuk mengakses halaman ini.');
        }

        $user = auth()->user();

        if ($user->hasRole('siswa')) {
            // Siswa hanya bisa ekspor data yang disetujui
            $ajuan_pkls = AjuanPkl::where('status', 'disetujui')->get();
        } elseif ($user->hasAnyRole(['admin', 'guru'])) {
            // Admin dan Guru bisa ekspor semua data
            $ajuan_pkls = AjuanPkl::all();
        } else {
            abort(403, 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 14);

        // Header
        $pdf->Cell(190, 10, 'Data Ajuan PKL', 0, 1, 'C');
        $pdf->Ln(7);

        // Tabel Header
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 10, 'IA', 1, 0, 'C');
        $pdf->Cell(50, 10, 'Nama Siswa', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Id Industri', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Tanggal Mulai', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Tanggal Selesai', 1, 0, 'C');
        $pdf->Cell(35, 10, 'Tanggal Ajuan', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Status', 1, 1, 'C'); // Pindah baris

        // Isi data dari database
        $pdf->SetFont('Arial', '', 10);
        foreach ($ajuan_pkls as $s) {
            $pdf->Cell(10, 10, $s->id_ajuan, 1, 0, 'C');

            $nama_siswa = $s->siswa ? $s->siswa->nama_siswa : 'Tidak Ada';
            $pdf->Cell(50, 10, $nama_siswa, 1, 0, 'C');

            $nama_industri = $s->industri ? $s->industri->nama_industri : 'Tidak Ada';
            $pdf->Cell(20, 10, $nama_industri, 1, 0, 'C');

            $pdf->Cell(30, 10, $s->tanggal_mulai, 1, 0, 'C');
            $pdf->Cell(30, 10, $s->tanggal_selesai, 1, 0, 'C');
            $pdf->Cell(35, 10, $s->tanggal_pengajuan, 1, 0, 'C');
            $pdf->Cell(20, 10, $s->status, 1, 1, 'C'); // Pindah ke baris baru setelah semua sel terisi
        }

        // Output PDF ke browser
        $pdf->Output('I', 'data_ajuan_pkl.pdf');
        exit;
    }
}
