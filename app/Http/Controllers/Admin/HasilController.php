<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        $hasil = Hasil::all();
        return view('admin.hasil.index', compact(['hasil']));
    }

    public function print()
    {
        $hasil = Hasil::all();
        $pdf = PDF::loadview('admin.hasil.print', compact(['hasil']));
        return $pdf->stream();
    }

    public function destroy(Hasil $hasil)
    {
        $hasil->delete();
        return redirect()->route('hasil.index')->with('flash', 'Data berhasil dihapus');
    }
}
