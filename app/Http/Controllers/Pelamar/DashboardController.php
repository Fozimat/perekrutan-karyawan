<?php

namespace App\Http\Controllers\Pelamar;

use App\Models\Hasil;
use App\Models\Upload;
use App\Models\DataDiri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;

class DashboardController extends Controller
{
    public function index()
    {
        $datadiri = DataDiri::with('lowongan')->where('id_user', auth()->user()->id)->first();
        $upload = Upload::where('id_user', auth()->user()->id)->first();
        $cek_hasil = Hasil::where('id_user', auth()->user()->id)->exists();
        return view('pelamar.dashboard.index', compact(['datadiri', 'upload', 'cek_hasil']));
    }

    public function print()
    {
        $hasil = Hasil::where('id_user', auth()->user()->id)->first();
        $pdf = PDF::loadview('pelamar.dashboard.print', compact(['hasil']));
        return $pdf->stream();
    }
}
