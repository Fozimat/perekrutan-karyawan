<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function hasil_lulus()
    {
        $hasil = Hasil::where('status', 1)->get();
        return view('admin.hasil.lulus', compact(['hasil']));
    }

    public function hasil_tidak_lulus()
    {
        $hasil = Hasil::where('status', 0)->get();
        return view('admin.hasil.tidak_lulus', compact(['hasil']));
    }

    public function print_lulus()
    {
        $hasil = Hasil::where('status', 1)->get();
        $pdf = PDF::loadview('admin.hasil.print_lulus', compact(['hasil']));
        return $pdf->stream();
    }

    public function print_tidak_lulus()
    {
        $hasil = Hasil::where('status', 0)->get();
        $pdf = PDF::loadview('admin.hasil.print_tidak_lulus', compact(['hasil']));
        return $pdf->stream();
    }

    public function destroy(Hasil $hasil)
    {
        $hasil->delete();
        return back()->with('flash', 'Data berhasil dihapus');
    }
}
