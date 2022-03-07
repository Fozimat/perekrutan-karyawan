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
@endsection