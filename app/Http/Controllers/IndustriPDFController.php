<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;
use FPDF;

class IndustriPDFController extends Controller
{
    public function generate()
    {
        $industri = Industri::all();

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 14);

        // Header
        $pdf->Cell(190, 10, 'Data Industri', 0, 1, 'C');
        $pdf->Ln(4);

        // Tabel Header
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 10, 'ID', 1, 0, 'C');
        $pdf->Cell(50, 10, 'Nama Industri', 1, 0, 'C');
        $pdf->Cell(100, 10, 'Alamat', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Kontak', 1, 1, 'C');

        // Isi data dari database
        $pdf->SetFont('Arial', '', 10);
        foreach ($industri as $s) {
            $pdf->Cell(10, 10, $s->id_industri, 1, 0, 'C');
            
            // MultiCell untuk nama industri
            $pdf->Cell(50, 10, $s->nama_industri, 1, 0, 'C');
            
            // MultiCell untuk alamat dengan pengaturan posisi agar tidak tumpang tindih
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->MultiCell(100, 10, $s->alamat, 1, 'C');
            $pdf->SetXY($x + 100, $y); // Pindah ke kanan setelah MultiCell

            $pdf->Cell(30, 10, $s->kontak, 1, 1, 'C');
        }

        // Output PDF ke browser
        $pdf->Output('I', 'data_industri.pdf');
        exit;
    }
}
