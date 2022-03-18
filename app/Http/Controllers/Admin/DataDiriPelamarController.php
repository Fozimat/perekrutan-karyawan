<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\DataDiri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hasil;
use Illuminate\Support\Facades\File;

class DataDiriPelamarController extends Controller
{
    public function index()
    {
        $datadiri = User::has('datadiri')->where('level', 'PELAMAR')->get();
        return view('admin.data-diri.index', compact(['datadiri']));
    }

    public function show($dataDiri)
    {
        $detail = DataDiri::with(['user', 'lowongan'])->find($dataDiri);
        $user = User::with(['upload'])->where('id', $detail->id_user)->get();
        // dd($user);
        $cek_hasil = User::whereHas('hasil')->where('id', $detail->id_user)->exists();
        // $cek_hasil_batal = User::with('hasil')->where('id', $detail->id_user)->get();
        $cek_hasil_batal = Hasil::where('id_user', $detail->id_user)->get();
        // dd($cek_hasil_batal[0]->id);
        return view('admin.data-diri.show', compact(['detail', 'user', 'cek_hasil', 'cek_hasil_batal']));
    }

    public function store_hasil($dataDiri, Request $request)
    {
        $data = [
            'id_user' => $request->id_user
        ];
        Hasil::create($data);
        return redirect()->route('pelamar-datadiri.show', $dataDiri)->with('flash', 'Berhasil ditambahkan');
    }

    public function destroy_hasil($dataDiri, $id)
    {
        Hasil::findOrFail($id)->delete();
        return redirect()->route('pelamar-datadiri.show', $dataDiri)->with('flash', 'Berhasil dibatalkan');
    }

    public function destroy(DataDiri $dataDiri)
    {
        $dataDiri->delete();
        return redirect()->route('pelamar-datadiri')->with('flash', 'Data berhasil dihapus');
    }
}
