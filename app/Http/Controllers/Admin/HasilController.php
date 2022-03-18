<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        $hasil = Hasil::all();
        return view('admin.hasil.index', compact(['hasil']));
    }

    public function destroy(Hasil $hasil)
    {
        $hasil->delete();
        return redirect()->route('hasil.index')->with('flash', 'Data berhasil dihapus');
    }
}
