@extends('template.admin')

@section('title')
Dashboard Admin
@endsection

@push('style')
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets-frontend/css-dashboard-admin/bootstrap-extended.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets-frontend/css-dashboard-admin/style.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets-frontend/css-dashboard-admin/colors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets-frontend/css-dashboard-admin/bootstrap.min.css') }}">

@endpush
@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="danger">{{ $pelamar }}</h3>
                            <span class="fw-bold">Pelamar</span>
                        </div>
                        <div class="align-self-center">
                            <i class="icon-rocket danger font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{ $data_lengkap }}</h3>
                            <span class="fw-bold">Data Lengkap</span>
                        </div>
                        <div class="align-self-center">
                            <i class="icon-user success font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="warning">{{ $data_belum_lengkap }}</h3>
                            <span class="fw-bold" style="font-size: 13px;">Data Belum Lengkap</span>
                        </div>
                        <div class="align-self-center">
                            <i class="icon-pie-chart warning font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="primary">{{ $lowongan }}</h3>
                            <span class="fw-bold">Lowongan</span>
                        </div>
                        <div class="align-self-center">
                            <i class="icon-support primary font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection