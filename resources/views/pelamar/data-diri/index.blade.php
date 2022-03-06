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
                <h4 class="card-title">Form Data Diri</h4>
                <p class="card-description">
                    Silakan lengkapi form data diri anda
                </p>
                <form class="forms-sample"
                    action="{{ isset($datadiri->id) ?  route('datadiri.update', $datadiri->id) : route('datadiri.store') }}"
                    method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                        <label for="nik">NIK</label>
                        <input type="text"
                            class="form-control @error('nik') is-invalid @enderror {{ isset($datadiri->nik) ? 'is-valid' : '' }}"
                            id="nik" name="nik" value="{{ old('nik', isset($datadiri->nik) ? $datadiri->nik : '') }}">
                        @error('nik')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text"
                            class="form-control @error('nama_lengkap') is-invalid @enderror {{ isset($datadiri->nama_lengkap) ? 'is-valid' : '' }}"
                            id="nama_lengkap" name="nama_lengkap"
                            value="{{ old('nama_lengkap', isset($datadiri->nama_lengkap) ? $datadiri->nama_lengkap : '') }}">
                        @error('nama_lengkap')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text"
                            class="form-control @error('tempat_lahir') is-invalid @enderror {{ isset($datadiri->tempat_lahir) ? 'is-valid' : '' }}"
                            id="tempat_lahir" name="tempat_lahir"
                            value="{{ isset($datadiri->tempat_lahir) ? $datadiri->tempat_lahir : '' }}">
                        @error('tempat_lahir')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date"
                            class="form-control @error('tanggal_lahir') is-invalid @enderror {{ isset($datadiri->tanggal_lahir) ? 'is-valid' : '' }}"
                            id="tanggal_lahir" name="tanggal_lahir"
                            value="{{ isset($datadiri->tanggal_lahir) ? $datadiri->tanggal_lahir : '' }}">
                        @error('tanggal_lahir')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control {{ isset($datadiri->umur) ? 'is-valid' : '' }}" id="umur"
                            name="umur" readonly value="{{ isset($datadiri->umur) ? $datadiri->umur : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select
                            class="form-control @error('jenis_kelamin') is-invalid @enderror {{ isset($datadiri->jenis_kelamin) ? 'is-valid' : '' }}"
                            id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">--Pilih--</option>
                            <option value="Laki-laki" {{ isset($datadiri->jenis_kelamin) && $datadiri->jenis_kelamin
                                == "Laki-laki" ? 'selected' :
                                ''
                                }}>Laki-laki</option>
                            <option value="Perempuan" {{ isset($datadiri->jenis_kelamin) && $datadiri->jenis_kelamin
                                == "Perempuan" ? 'selected' :
                                ''
                                }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea
                            class="form-control @error('alamat') is-invalid @enderror {{ isset($datadiri->alamat) ? 'is-valid' : '' }}"
                            id="alamat" name="alamat" rows="4">{{ isset($datadiri->alamat) ?
                            $datadiri->alamat : '' }}</textarea>
                        @error('alamat')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <select
                            class="form-control @error('pendidikan_terakhir') is-invalid @enderror {{ isset($datadiri->pendidikan_terakhir) ? 'is-valid' : '' }}"
                            id="pendidikan_terakhir" name="pendidikan_terakhir">
                            <option value="">--Pilih--</option>
                            <option value="SD" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "SD" ? 'selected' :
                                ''
                                }}>SD</option>
                            <option value="SMP" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "SMP" ? 'selected' :
                                ''
                                }}>SMP</option>
                            <option value="SMA/SMK" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "SMA/SMK" ? 'selected' :
                                ''
                                }}>SMA/SMK</option>
                            <option value="Diploma 1" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "Diploma 1" ? 'selected' :
                                ''
                                }}>Diploma 1</option>
                            <option value="Diploma 2" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "Diploma 2" ? 'selected' :
                                ''
                                }}>Diploma 2</option>
                            <option value="Diploma 3" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "Diploma 3" ? 'selected' :
                                ''
                                }}>Diploma 3</option>
                            <option value="Diploma 4" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "Diploma 4" ? 'selected' :
                                ''
                                }}>Diploma 4</option>
                            <option value="Strata 1" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "Strata 1" ? 'selected' :
                                ''
                                }}>Strata 1</option>
                            <option value="Strata 2" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "Strata 2" ? 'selected' :
                                ''
                                }}>Strata 2</option>
                            <option value="Strata 3" {{ isset($datadiri->pendidikan_terakhir) &&
                                $datadiri->pendidikan_terakhir
                                == "Strata 3" ? 'selected' :
                                ''
                                }}>Strata 3</option>
                        </select>
                        @error('pendidikan_terakhir')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select
                            class="form-control @error('agama') is-invalid @enderror {{ isset($datadiri->agama) ? 'is-valid' : '' }}"
                            id="agama" name="agama">
                            <option value="">--Pilih--</option>
                            <option value="Islam" {{ isset($datadiri->agama) &&
                                $datadiri->agama
                                == "Islam" ? 'selected' :
                                ''
                                }}>Islam</option>
                            <option value="Protestan" {{ isset($datadiri->agama) &&
                                $datadiri->agama
                                == "Protestan" ? 'selected' :
                                ''
                                }}>Protestan</option>
                            <option value="Katolik" {{ isset($datadiri->agama) &&
                                $datadiri->agama
                                == "Katolik" ? 'selected' :
                                ''
                                }}>Katolik</option>
                            <option value="Hindu" {{ isset($datadiri->agama) &&
                                $datadiri->agama
                                == "Hindu" ? 'selected' :
                                ''
                                }}>Hindu</option>
                            <option value="Buddha" {{ isset($datadiri->agama) &&
                                $datadiri->agama
                                == "Buddha" ? 'selected' :
                                ''
                                }}>Buddha</option>
                            <option value="Khonghucu" {{ isset($datadiri->agama) &&
                                $datadiri->agama
                                == "Khonghucu" ? 'selected' :
                                ''
                                }}>Khonghucu</option>
                        </select>
                        @error('agama')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <input type="text"
                            class="form-control @error('telephone') is-invalid @enderror {{ isset($datadiri->telephone) ? 'is-valid' : '' }}"
                            id="telephone" name="telephone"
                            value="{{ isset($datadiri->telephone) ? $datadiri->telephone : '' }}">
                        @error('telephone')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    $('#tanggal_lahir').on('change', function() {
            let date = new Date($('#tanggal_lahir').val());
            let year = date.getFullYear();
            let nowYear = new Date().getFullYear();
            let res = nowYear - year;
            $('#umur').val(res);
        }); 
</script>
@endpush