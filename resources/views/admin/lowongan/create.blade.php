@extends('template.admin')

@section('title')
Tambah Lowongan
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
                <h4 class="card-title">Form Tambah Lowongan</h4>

                <form class="forms-sample" action="{{ route('lowongan.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input type="text" class="form-control @error('posisi') is-invalid @enderror" id="posisi"
                            name="posisi" value="{{ old('posisi') }}" placeholder="Posisi">
                        @error('posisi')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                            <option value="">--Pilih--</option>
                            <option {{ old('status')=="open" ? "selected" : "" }} value="open">OPEN</option>
                            <option {{ old('status')=="closed" ? "selected" : "" }} value="closed">CLOSED</option>
                        </select>
                        @error('status')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Poster</label>
                        <input type="file" name="poster" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" required
                                class="form-control file-upload-info @error('poster') is-invalid @enderror" disabled=""
                                placeholder="Upload Poster">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                            @error('poster')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection