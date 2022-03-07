@extends('template.admin')

@section('title')
Detail Data Pelamar
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4">Detail Data Pelamar</h3>
                <div class="template-demo">
                    <h5>
                        <span style="width: 150px!important;display: inline-block;">Nama
                            Lengkap</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->nama_lengkap }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 150px!important;display: inline-block;">NIK</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->nik }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 150px!important;display: inline-block;">Tempat Lahir</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->tempat_lahir }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 150px!important;display: inline-block;">Umur</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->umur }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 150px!important;display: inline-block;">Jenis Kelamin</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->jenis_kelamin }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 150px!important;display: inline-block;">Alamat</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->alamat }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 150px!important;display: inline-block;">Pendidikan Terakhir</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->pendidikan_terakhir }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 150px!important;display: inline-block;">Agama</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->agama }}
                        </small>
                    </h5>
                    <h5>
                        <span style="width: 150px!important;display: inline-block;">Telepon</span>
                        <small class="text-muted" style="margin-left: 200px;">
                            {{ $detail->telephone }}
                        </small>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

@if (isset($user->upload))
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">Foto</h4>
                        @if (isset($user->upload->foto))
                        <a data-lightbox="photos" href="{{ asset('foto/'.$user->upload->foto) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('foto/'.$user->upload->foto) }}"></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">KTP</h4>
                        @if (isset($user->upload->ktp))
                        <a data-lightbox="photos" href="{{ asset('ktp/'.$user->upload->ktp) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('ktp/'.$user->upload->ktp) }}"></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">CV</h4>
                        @if (isset($user->upload->cv))
                        <a data-lightbox="photos" href="{{ asset('cv/'.$user->upload->cv) }}"><img class="img-thumbnail"
                                style="height: 400px; width: 300px;" src="{{ asset('cv/'.$user->upload->cv) }}"></a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">Ijazah</h4>
                        @if (isset($user->upload->ijazah))
                        <a data-lightbox="photos" href="{{ asset('ijazah/'.$user->upload->ijazah) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('ijazah/'.$user->upload->ijazah) }}"></a>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">SIM</h4>
                        @if (isset($user->upload->sim))
                        <a data-lightbox="photos" href="{{ asset('sim/'.$user->upload->sim) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('sim/'.$user->upload->sim) }}"></a>
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