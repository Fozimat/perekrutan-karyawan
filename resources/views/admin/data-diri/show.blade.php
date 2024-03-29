@extends('template.admin')

@section('title')
Detail Data Pelamar
@endsection

@section('content')

@if (!isset($user[0]->upload->foto))
<div class="alert alert-warning d-flex align-items-center" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
        class="bi bi-info-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path
            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </svg>
    <div class="text-black">
        Pelamar belum melengkapi dokumen pendukung.
    </div>
</div>
@endif

@if (session('flash'))
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
        class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path
            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </svg>
    <div>
        {{ session('flash') }}
    </div>
</div>
@endif


<div class="row">
    <div class="d-flex justify-content-end align-items-center p-2">
        @if ($cek_hasil != false)
        <form
            action="{{ route('hasil.datadiri.destroy', ['id' => $cek_hasil_batal[0]->id, 'dataDiri' => $detail->id]) }}"
            method="POST">
            @csrf
            @method('delete')
            <input type="hidden" name="id" value="{{ $cek_hasil_batal[0]->id }}">
            <button type="submit" class="btn btn-danger btn-rounded btn-fw btn-icon-text mb-2">
                <i class="ti-close btn-icon-prepend"></i>
                Batalkan
            </button>
        </form>
        @else
        @if (isset($user[0]->upload->foto))
        <form action="{{ route('store_hasil_gagal', $detail->id) }}" method="POST" style="margin-right:10px;">
            @csrf
            <input type="hidden" name="id_user" value="{{ $user[0]->id }}">
            <input type="hidden" name="status" value="0">
            <button type="submit" class="btn btn-danger btn-rounded btn-fw btn-icon-text mb-2">
                <i class="ti-close btn-icon-prepend"></i>
                Tidak Lolos
            </button>
        </form>
        <form action="{{ route('store_hasil', $detail->id) }}" method="POST">
            @csrf
            <input type="hidden" name="id_user" value="{{ $user[0]->id }}">
            <input type="hidden" name="status" value="1">
            <button type="submit" class="btn btn-success btn-rounded btn-fw btn-icon-text mb-2">
                <i class="ti-check btn-icon-prepend"></i>
                Lolos Berkas
            </button>
        </form>
        @endif
        @endif
    </div>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-4 text-primary">{{ $detail->lowongan->posisi }}</h3>
                </div>
                <div class="template-demo">
                    <h5>
                        <span style="width: 170px!important;display: inline-block;">Nama
                            Lengkap</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->nama_lengkap }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 170px!important;display: inline-block;">NIK</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->nik }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 170px!important;display: inline-block;">Tempat/Tanggal Lahir</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->tempat_lahir }}, {{ date('d-m-Y', strtotime($detail->tanggal_lahir))
                            }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 170px!important;display: inline-block;">Umur</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->umur }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 170px!important;display: inline-block;">Jenis Kelamin</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->jenis_kelamin }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 170px!important;display: inline-block;">Alamat</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->alamat }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 170px!important;display: inline-block;">Pendidikan Terakhir</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->pendidikan_terakhir }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 170px!important;display: inline-block;">Agama</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->agama }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 170px!important;display: inline-block;">Telepon</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->telephone }}
                        </small>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

@if (isset($user[0]->upload->foto))
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">Foto</h4>
                        @if (isset($user[0]->upload->foto))
                        <a data-lightbox="photos" href="{{ asset('foto/'.$user[0]->upload->foto) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('foto/'.$user[0]->upload->foto) }}"></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">KTP</h4>
                        @if (isset($user[0]->upload->ktp))
                        <a data-lightbox="photos" href="{{ asset('ktp/'.$user[0]->upload->ktp) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('ktp/'.$user[0]->upload->ktp) }}"></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">CV</h4>
                        @if (isset($user[0]->upload->cv))
                        <a data-lightbox="photos" href="{{ asset('cv/'.$user[0]->upload->cv) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('cv/'.$user[0]->upload->cv) }}"></a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">Ijazah</h4>
                        @if (isset($user[0]->upload->ijazah))
                        <a data-lightbox="photos" href="{{ asset('ijazah/'.$user[0]->upload->ijazah) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('ijazah/'.$user[0]->upload->ijazah) }}"></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">SIM</h4>
                        @if (isset($user[0]->upload->sim))
                        <a data-lightbox="photos" href="{{ asset('sim/'.$user[0]->upload->sim) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('sim/'.$user[0]->upload->sim) }}"></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endsection

    @push('style')
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/lightbox/dist/css/lightbox.min.css') }}">
    @endpush

    @push('script')
    <script src="{{ asset('assets-admin/vendors/lightbox/dist/js/lightbox-plus-jquery.min.js') }}"></script>
    @endpush