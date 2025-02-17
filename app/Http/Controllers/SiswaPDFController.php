<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use FPDF;

class SiswaPDFController extends Controller
{
    public function generate()
    {
        $siswa = Siswa::all();

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 14);

        // Header
        $pdf->Cell(190, 10, 'Data Siswa', 0, 1, 'C');
        $pdf->Ln(7);

        // Tabel Header
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 10, 'ID', 1, 0, 'C');
        $pdf->Cell(50, 10, 'Nama Siswa', 1, 0, 'C');
        $pdf->Cell(30, 10, 'NIS', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Kelas', 1, 0, 'C');
        $pdf->Cell(50, 10, 'Jurusan', 1, 1, 'C'); // 1 di akhir untuk pindah baris

        // Isi data dari database
        $pdf->SetFont('Arial', '', 10);
        foreach ($siswa as $s) {
            $height = 10; // Default tinggi sel
            $pdf->Cell(10, $height, $s->id_siswa, 1, 0, 'C');

            // MultiCell untuk nama siswa (agar teks panjang tidak keluar batas)
            $x = $pdf->GetX(); // Simpan posisi awal X
            $y = $pdf->GetY(); // Simpan posisi awal Y
            $pdf->MultiCell(50, 10, $s->nama_siswa, 1, 'L');
            $pdf->SetXY($x + 50, $y); // Kembali ke posisi setelah MultiCell

            $pdf->Cell(30, $height, $s->nis, 1, 0, 'C');
            $pdf->Cell(20, $height, $s->kelas, 1, 0, 'C');
            $pdf->Cell(50, $height, $s->jurusan, 1, 1, 'C'); // 1 di akhir untuk pindah baris
        }

        // Output PDF ke browser
        $pdf->Output('I', 'data_siswa.pdf');
        exit;
    }
}
