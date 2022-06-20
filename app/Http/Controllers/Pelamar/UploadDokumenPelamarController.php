<?php

namespace App\Http\Controllers\Pelamar;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
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
        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'mimes:jpg,jpeg,png|max:2048',
            ]);
        }

        if ($request->hasFile('ktp')) {
            $request->validate([
                'ktp' => 'mimes:jpg,jpeg,png|max:2048',
            ]);
        }

        if ($request->hasFile('cv')) {
            $request->validate([
                'cv' => 'mimes:jpg,jpeg,png|max:2048',
            ]);
        }

        if ($request->hasFile('ijazah')) {
            $request->validate([
                'ijazah' => 'mimes:jpg,jpeg,png|max:2048',
            ]);
        }

        if ($request->hasFile('sim')) {
            $request->validate([
                'sim' => 'mimes:jpg,jpeg,png|max:2048',
            ]);
        }

        $upload = Upload::find($id);

        if ($request->hasFile('foto')) {
            $path = public_path('foto/' . $upload->foto);
            if (File::exists($path)) {
                File::delete($path);
            }
            $foto = $request->file('foto');
            $nama_foto = time() . '-foto-' . auth()->user()->nama . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $nama_foto);
            $upload->foto = $nama_foto;
        } else {
            $upload->foto = $request->foto_lama;
        }

        if ($request->hasFile('ktp')) {
            $path = public_path('ktp/' . $upload->ktp);
            if (File::exists($path)) {
                File::delete($path);
            }
            $ktp = $request->file('ktp');
            $nama_ktp = time() . '-ktp-' . auth()->user()->nama . '.' . $ktp->getClientOriginalExtension();
            $ktp->move(public_path('ktp'), $nama_ktp);
            $upload->ktp = $nama_ktp;
        } else {
            $upload->ktp = $request->ktp_lama;
        }

        if ($request->hasFile('cv')) {
            $path = public_path('cv/' . $upload->cv);
            if (File::exists($path)) {
                File::delete($path);
            }
            $cv = $request->file('cv');
            $nama_cv = time() . '-cv-' . auth()->user()->nama . '.' . $cv->getClientOriginalExtension();
            $cv->move(public_path('cv'), $nama_cv);
            $upload->cv = $nama_cv;
        } else {
            $upload->cv = $request->cv_lama;
        }

        if ($request->hasFile('ijazah')) {
            $path = public_path('ijazah/' . $upload->ijazah);
            if (File::exists($path)) {
                File::delete($path);
            }
            $ijazah = $request->file('ijazah');
            $nama_ijazah = time() . '-ijazah-' . auth()->user()->nama . '.' . $ijazah->getClientOriginalExtension();
            $ijazah->move(public_path('ijazah'), $nama_ijazah);
            $upload->ijazah = $nama_ijazah;
        } else {
            $upload->ijazah = $request->ijazah_lama;
        }

        if ($request->hasFile('sim')) {
            $path = public_path('sim/' . $upload->sim);
            if (File::exists($path)) {
                File::delete($path);
            }
            $sim = $request->file('sim');
            $nama_sim = time() . '-sim-' . auth()->user()->nama . '.' . $sim->getClientOriginalExtension();
            $sim->move(public_path('sim'), $nama_sim);
            $upload->sim = $nama_sim;
        } else {
            $upload->sim = $request->sim_lama;
        }

        $upload->save();
        return redirect()->route('dokumen.index')->with('flash', 'Data berhasil disimpan');
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
