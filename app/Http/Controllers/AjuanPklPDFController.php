<?php

namespace App\Http\Controllers;

use App\Models\AjuanPkl;
use Illuminate\Http\Request;
use FPDF;

class AjuanPklPDFController extends Controller
{
    public function generate()
    {
        $ajuan_pkl = AjuanPkl::all();

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
        $pdf->Cell(30, 10, 'Tanggal Ajuan', 1, 0, 'C');
        $pdf->Cell(20, 10, 'status', 1, 1, 'C'); // 1 di akhir untuk pindah baris

        // Isi data dari database
        $pdf->SetFont('Arial', '', 10);
        foreach ($ajuan_pkl as $s) {
            $height = 10; // Default tinggi sel
            $pdf->Cell(10, $height, $s->id_ajuan, 1, 0, 'C');

            $nama_siswa = $s->siswa ? $s->siswa->nama_siswa : 'Tidak Ada';
            $pdf->Cell(50, 10, $nama_siswa, 1, 0, 'C');

            $nama_industri = $s->industri ? $s->industri->nama_industri : 'Tidak Ada';
            $pdf->Cell(20, 10, $nama_industri, 1, 0, 'C');

            // MultiCell untuk nama siswa (agar teks panjang tidak keluar batas)
            $x = $pdf->GetX(); // Simpan posisi awal X
            $y = $pdf->GetY(); // Simpan posisi awal Y
            $pdf->MultiCell(30, 10, $s->tanggal_mulai, 1, 'C');
            $pdf->SetXY($x + 30, $y); // Kembali ke posisi setelah MultiCell

            // MultiCell untuk nama siswa (agar teks panjang tidak keluar batas)
            $x = $pdf->GetX(); // Simpan posisi awal X
            $y = $pdf->GetY(); // Simpan posisi awal Y
            $pdf->MultiCell(30, 10, $s->tanggal_selesai, 1, 'C');
            $pdf->SetXY($x + 30, $y); // Kembali ke posisi setelah MultiCell

            $x = $pdf->GetX(); // Simpan posisi awal X
            $y = $pdf->GetY(); // Simpan posisi awal Y
            $pdf->MultiCell(30, 10, $s->tanggal_pengajuan, 1, 'C');
            $pdf->SetXY($x + 30, $y); // Kembali ke posisi setelah MultiCell

            $pdf->Cell(20, $height, $s->status, 1, 0, 'C');
        }

        // Output PDF ke browser
        $pdf->Output('I', 'data_ajuan_pkl.pdf');
        exit;
    }
}
