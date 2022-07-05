<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Lowongan;

class HomeController extends Controller
{

    public function index()
    {
        $lowongan = Lowongan::whereDate('batas_lamaran', '>', Carbon::now()->isoFormat('YYYY-MM-DD'))->get();
        return view('frontend.index', compact(['lowongan']));
    }
}
