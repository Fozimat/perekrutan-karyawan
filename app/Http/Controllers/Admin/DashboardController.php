<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\DataDiri;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
{
    public function index()
    {
        $pelamar = User::whereHas('datadiri')->count();
        $data_lengkap = User::whereHas('datadiri')->whereHas('upload')->where('level', '=', 'PELAMAR')->count();
        $data_belum_lengkap = User::whereDoesntHave('upload')->where('level', '=', 'PELAMAR')->count();
        $lowongan = Lowongan::count();
        return view('admin.dashboard.index', compact(['pelamar', 'data_lengkap', 'data_belum_lengkap', 'lowongan']));
    }
}
