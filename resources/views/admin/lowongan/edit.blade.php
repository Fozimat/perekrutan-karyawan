@extends('template.admin')

@section('title')
Edit Lowongan
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
                <h4 class="card-title">Form Edit Lowongan</h4>

                <form class="forms-sample" action="{{ route('lowongan.update', $lowongan->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input type="text" class="form-control @error('posisi') is-invalid @enderror" id="posisi"
                            name="posisi" value="{{ $lowongan->posisi }}" placeholder="Posisi">
                        @error('posisi')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="batas_lamaran">Batas Lamaran</label>
                        <input type="date" class="form-control @error('batas_lamaran') is-invalid @enderror"
                            id="batas_lamaran" name="batas_lamaran"
                            value="{{ $lowongan->batas_lamaran->format('Y-m-d') }}" placeholder="batas_lamaran">
                        @error('batas_lamaran')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Poster</label>
                        <input type="hidden" name="poster_lama" value="{{ $lowongan->poster }}">
                        <div class="row">
                            <div class="col-md-2">
                                <img style="width: 100px;height: 100px;border-radius: 0;"
                                    src="{{ asset('poster/'.$lowongan->poster) }}">
                            </div>
                            <div class="col-md-10">
                                <input type="file" name="poster" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" required
                                        class="form-control file-upload-info @error('poster') is-invalid @enderror"
                                        disabled="" placeholder="Upload Poster">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                    @error('poster')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="text-danger" style="font-size: 12px;">**Kosongkan jika tidak ingin mengganti
                                    poster**</div>

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection