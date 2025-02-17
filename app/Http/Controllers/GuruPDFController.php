<?php

namespace App\Http\Controllers;

use FPDF;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruPDFController extends Controller
{
    public function generate()
    {
        $guru = Guru::all();

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 14);

        // Header
        $pdf->Cell(190, 10, 'Data Guru', 0, 1, 'C');
        $pdf->Ln(4);

        // Tabel Header
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 10, 'ID', 1, 0, 'C');
        $pdf->Cell(80, 10, 'Nama Guru', 1, 0, 'C');
        $pdf->Cell(50, 10, 'Nip', 1, 0, 'C');
        $pdf->Cell(50, 10, 'Bidang', 1, 1, 'C');

        // Isi data dari database
        $pdf->SetFont('Arial', '', 10);
        foreach ($guru as $s) {
            $pdf->Cell(10, 10, $s->id_guru, 1, 0, 'C');
            
            // MultiCell untuk nama industri
            $pdf->Cell(80, 10, $s->nama_guru, 1, 0, 'C');
            
            // MultiCell untuk alamat dengan pengaturan posisi agar tidak tumpang tindih
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->MultiCell(50, 10, $s->nip, 1, 'C');
            $pdf->SetXY($x + 50, $y); // Pindah ke kanan setelah MultiCell

            $pdf->Cell(50, 10, $s->bidang, 1, 1, 'C');
        }

        // Output PDF ke browser
        $pdf->Output('I', 'data_guru.pdf');
        exit;
    }
}
