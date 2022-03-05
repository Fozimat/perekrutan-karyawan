<?php

namespace App\Http\Controllers\Pelamar;

use App\Models\DataDiri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DataDiriPelamarRequest;

class DataDiriPelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datadiri = DataDiri::where('id_user', auth()->user()->id)->first();
        return view('pelamar.data-diri.index', compact(['datadiri']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataDiriPelamarRequest $request)
    {
        $datadiri = new DataDiri();

        $datadiri->id_user = $request->id_user;
        $datadiri->nik = $request->nik;
        $datadiri->nama_lengkap = $request->nama_lengkap;
        $datadiri->tempat_lahir = $request->tempat_lahir;
        $datadiri->tanggal_lahir = $request->tanggal_lahir;
        $datadiri->jenis_kelamin = $request->jenis_kelamin;
        $datadiri->alamat = $request->alamat;
        $datadiri->pendidikan_terakhir = $request->pendidikan_terakhir;
        $datadiri->agama = $request->agama;
        $datadiri->telephone = $request->telephone;

        $datadiri->save();
        return redirect()->route('datadiri.index',)->with('flash', 'Data berhasil disimpan');
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
    public function edit(DataDiri $datadiri)
    {
        // return view('pelamar.data-diri.index', compact(['datadiri']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataDiriPelamarRequest $request, $id)
    {


        $datadiri = DataDiri::find($id);

        $datadiri->id_user = $request->id_user;
        $datadiri->nik = $request->nik;
        $datadiri->nama_lengkap = $request->nama_lengkap;
        $datadiri->tempat_lahir = $request->tempat_lahir;
        $datadiri->tanggal_lahir = $request->tanggal_lahir;
        $datadiri->jenis_kelamin = $request->jenis_kelamin;
        $datadiri->alamat = $request->alamat;
        $datadiri->pendidikan_terakhir = $request->pendidikan_terakhir;
        $datadiri->agama = $request->agama;
        $datadiri->telephone = $request->telephone;

        $datadiri->save();

        return redirect()->route('datadiri.index')->with('flash', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
