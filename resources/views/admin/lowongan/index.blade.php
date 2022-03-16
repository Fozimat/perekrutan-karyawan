@extends('template.admin')

@section('title')
Lowongan
@endsection

@section('content')
<a href="{{ route('lowongan.create') }}" class="btn btn-primary btn-rounded btn-fw mb-3">Tambah Data</a>

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
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Lowongan</h4>
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Posisi</th>
                                <th>Status</th>
                                <th>Poster</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lowongan as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->posisi}}</td>
                                <td class="text-uppercase">{{ $data->status }}</td>
                                <td><img style="width: 100px;height: 100px;border-radius: 0;"
                                        src="{{ asset('poster/'.$data->poster) }}">
                                </td>
                                <td>
                                    <a href="{{ route('lowongan.edit', $data->id) }}"
                                        class="btn btn-success btn-sm">edit</a>
                                    <form action="{{ route('lowongan.destroy', $data->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Apakah anda yakin?')"
                                            class="btn btn-danger btn-sm">delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@push('script')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    } );
</script>
@endpush