<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;

class HomeController extends Controller
{

    public function index()
    {
        $lowongan = Lowongan::where('status', 'open')->get();
        return view('frontend.index', compact(['lowongan']));
    }
}
