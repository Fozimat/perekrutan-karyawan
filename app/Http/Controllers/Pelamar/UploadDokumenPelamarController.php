<?php

namespace App\Http\Controllers\Pelamar;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UploadDokumenPelamarRequest;

class UploadDokumenPelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upload = Upload::where('id_user', auth()->user()->id)->first();
        return view('pelamar.dokumen.index', compact(['upload']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadDokumenPelamarRequest $request)
    {
        $upload = new Upload();

        $foto = $request->file('foto');
        $ktp = $request->file('ktp');
        $cv = $request->file('cv');
        $ijazah = $request->file('ijazah');
        $sim = $request->file('sim');

        $nama_foto = time() . '-foto-' . auth()->user()->nama . '.' . $foto->getClientOriginalExtension();
        $nama_ktp = time() . '-ktp-' . auth()->user()->nama . '.' . $ktp->getClientOriginalExtension();
        $nama_cv = time() . '-cv-' . auth()->user()->nama . '.' . $cv->getClientOriginalExtension();
        $nama_ijazah = time() . '-ijazah-' . auth()->user()->nama . '.' . $ijazah->getClientOriginalExtension();
        $nama_sim = time() . '-sim-' . auth()->user()->nama . '.' . $sim->getClientOriginalExtension();

        $foto->move(public_path('foto'), $nama_foto);
        $ktp->move(public_path('ktp'), $nama_ktp);
        $cv->move(public_path('cv'), $nama_cv);
        $ijazah->move(public_path('ijazah'), $nama_ijazah);
        $sim->move(public_path('sim'), $nama_sim);

        $upload->id_user = $request->id_user;
        $upload->foto = $nama_foto;
        $upload->ktp = $nama_ktp;
        $upload->cv = $nama_cv;
        $upload->ijazah = $nama_ijazah;
        $upload->sim = $nama_sim;

        $upload->save();
        return redirect()->route('dokumen.index')->with('flash', 'Data berhasil disimpan');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
