<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LowonganRequest;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongan = Lowongan::all();
        return view('admin.lowongan.index', compact(['lowongan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lowongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LowonganRequest $request)
    {
        $poster = $request->file('poster');
        $nama_poster = time() . '-' . $request->posisi . '.' . $poster->getClientOriginalExtension();
        $poster->move(public_path('poster'), $nama_poster);
        $data = [
            'posisi' => $request->posisi,
            'batas_lamaran' => $request->batas_lamaran,
            'poster' => $nama_poster
        ];
        Lowongan::create($data);
        return redirect()->route('lowongan.index')->with('flash', 'Lowongan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lowongan $lowongan)
    {
        return view('admin.lowongan.edit', compact(['lowongan']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LowonganRequest $request, Lowongan $lowongan)
    {
        $data = [
            'posisi' => $request->posisi,
            'batas_lamaran' => $request->batas_lamaran,
        ];
        if ($request->hasFile('poster')) {
            $path = public_path('poster/' . $lowongan->poster);
            if (File::exists($path)) {
                File::delete($path);
            }
            $poster_baru = $request->file('poster');
            $nama_poster = time() . '-' . $request->posisi . '.' . $poster_baru->getClientOriginalExtension();
            $poster_baru->move(public_path('poster'), $nama_poster);
            $data['poster'] = $nama_poster;
        } else {
            $data['poster'] = $request->poster_lama;
        }
        $lowongan->update($data);
        return redirect()->route('lowongan.index')->with('flash', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lowongan $lowongan)
    {
        $path = public_path('poster/' . $lowongan->poster);
        if (File::exists($path)) {
            File::delete($path);
        }
        $lowongan->delete();
        return redirect()->route('lowongan.index')->with('flash', 'Data berhasil dihapus');
    }
}
