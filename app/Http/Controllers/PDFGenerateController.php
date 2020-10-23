<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RelatorioEntrega;
use Barryvdh\DomPDF\Facade as PDF;

class PDFGenerateController extends Controller
{
    public function generatePDF(){
        $relatorio = RelatorioEntrega::all();

        // dd($relatorio);

        $pdf = PDF::loadView('papper', compact('relatorio'));

        return $pdf->setPaper('a4')->stream('relatorio.pdf');
    }
}
