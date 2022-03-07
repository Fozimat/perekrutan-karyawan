@extends('template.admin')

@section('title')
Data Diri
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
                <p class="card-description">
                    Silakan lengkapi form dokumen pendukung anda
                </p>
                <form class="forms-sample" enctype="multipart/form-data" method="POST"
                    action="{{ isset($upload->id) ?  route('dokumen.update', $upload->id) : route('dokumen.store') }}">
                    @csrf
                    <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
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
                        <img style="max-height: 250px; max-width: 250px;" src="{{ asset('foto/'.$upload->foto) }}"
                            class="img-thumbnail">
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
                        <img style="max-height: 250px; max-width: 250px;" src="{{ asset('ktp/'.$upload->ktp) }}"
                            class="img-thumbnail">
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
                        <img style="max-height: 250px; max-width: 250px;" src="{{ asset('cv/'.$upload->cv) }}"
                            class="img-thumbnail">
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
                        <img style="max-height: 250px; max-width: 250px;" src="{{ asset('ijazah/'.$upload->ijazah) }}"
                            class="img-thumbnail">
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
                        <img style="max-height: 250px; max-width: 250px;" src="{{ asset('sim/'.$upload->sim) }}"
                            class="img-thumbnail">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection