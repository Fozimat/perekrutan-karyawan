<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\DataDiri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        // dd($user[0]->upload);
        return view('admin.data-diri.show', compact(['detail', 'user']));
    }

    public function destroy(DataDiri $dataDiri)
    {
        $dataDiri->delete();
        return redirect()->route('pelamar-datadiri')->with('flash', 'Data berhasil dihapus');
    }
}
