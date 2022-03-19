<?php

namespace App\Http\Controllers\Pelamar;

use App\Models\Upload;
use App\Models\DataDiri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $datadiri = DataDiri::with('lowongan')->where('id_user', auth()->user()->id)->first();
        $upload = Upload::where('id_user', auth()->user()->id)->first();

        return view('pelamar.dashboard.index', compact(['datadiri', 'upload']));
    }
}
