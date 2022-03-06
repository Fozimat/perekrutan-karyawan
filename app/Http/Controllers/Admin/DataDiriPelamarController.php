<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\DataDiri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataDiriPelamarController extends Controller
{
    public function index()
    {
        $datadiri = User::has('datadiri')->where('level', 'PELAMAR')->get();
        return view('admin.data-diri.index', compact(['datadiri']));
    }
}
