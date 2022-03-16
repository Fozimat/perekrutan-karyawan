@extends('template.admin')

@section('title')
Upload Dokumen
@endsection

@section('content')

@if (session('flash'))
<div class="alert alert-primary" role="alert">
    {{ session('flash') }}
</div>
@endif

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Dokumen Pendukung</h4>
                @if (isset($upload))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                        aria-label="Warning:">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                    <div>
                        Data Lengkap.
                    </div>
                </div>
                @else
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-info-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                        aria-label="Warning:">
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />

                    </svg>
                    <div class="text-black">
                        Silakan lengkapi form dokumen pendukung anda.
                    </div>
                </div>
                @endif
                <form class="forms-sample" enctype="multipart/form-data" method="POST"
                    action="{{ isset($upload->id) ?  route('dokumen.update', $upload->id) : route('dokumen.store') }}">
                    @csrf
                    <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">

                    <input type="hidden" name="foto_lama" value="{{ (isset($upload->foto) ? $upload->foto : '') }} ">
                    <input type="hidden" name="ktp_lama" value="{{ (isset($upload->ktp) ? $upload->ktp : '') }}">
                    <input type="hidden" name="cv_lama" value="{{ (isset($upload->cv) ? $upload->cv : '') }}">
                    <input type="hidden" name="ijazah_lama"
                        value="{{  (isset($upload->ijazah) ? $upload->ijazah : '')  }}">
                    <input type="hidden" name="sim_lama" value="{{ (isset($upload->sim) ? $upload->sim : '') }}">

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" required
                                class="form-control file-upload-info @error('foto') is-invalid @enderror {{ isset($upload->foto) ? 'is-valid' : '' }}"
                                disabled="" placeholder="Upload Foto">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                            @error('foto')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @if (isset($upload->id))
                        <a data-lightbox="photos" data-title="Foto" href="{{ asset('foto/'.$upload->foto) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('foto/'.$upload->foto) }}"></a>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>KTP</label>
                        <input type="file" name="ktp" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text"
                                class="form-control file-upload-info @error('ktp') is-invalid @enderror {{ isset($upload->ktp) ? 'is-valid' : '' }}"
                                disabled="" placeholder="Upload KTP">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                            @error('ktp')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @if (isset($upload->id))
                        <a data-lightbox="photos" data-title="KTP" href="{{ asset('ktp/'.$upload->ktp) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('ktp/'.$upload->ktp) }}"></a>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>CV</label>
                        <input type="file" name="cv" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text"
                                class="form-control file-upload-info @error('cv') is-invalid @enderror {{ isset($upload->cv) ? 'is-valid' : '' }}"
                                disabled="" placeholder="Upload CV">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                            @error('cv')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @if (isset($upload->id))
                        <a data-lightbox="photos" data-title="CV" href="{{ asset('cv/'.$upload->cv) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('cv/'.$upload->cv) }}"></a>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Ijazah</label>
                        <input type="file" name="ijazah" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text"
                                class="form-control file-upload-info @error('ijazah') is-invalid @enderror {{ isset($upload->ijazah) ? 'is-valid' : '' }}"
                                disabled="" placeholder="Upload Ijazah">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                            @error('ijazah')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @if (isset($upload->id))
                        <a data-lightbox="photos" data-title="Ijazah" href="{{ asset('ijazah/'.$upload->ijazah) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('ijazah/'.$upload->ijazah) }}"></a>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>SIM</label>
                        <input type="file" name="sim" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text"
                                class="form-control file-upload-info @error('sim') is-invalid @enderror {{ isset($upload->sim) ? 'is-valid' : '' }}"
                                disabled="" placeholder="Upload SIM">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                            @error('sim')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @if (isset($upload->id))
                        <a data-lightbox="photos" data-title="SIM" href="{{ asset('sim/'.$upload->sim) }}"><img
                                class="img-thumbnail" style="height: 400px; width: 300px;"
                                src="{{ asset('sim/'.$upload->sim) }}"></a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
<link rel="stylesheet" href="{{ asset('assets-admin/vendors/lightbox/dist/css/lightbox.min.css') }}">
@endpush

@push('script')
<script src="{{ asset('assets-admin/vendors/lightbox/dist/js/lightbox-plus-jquery.min.js') }}"></script>
@endpush