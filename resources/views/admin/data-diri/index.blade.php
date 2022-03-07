@extends('template.admin')

@section('title')
Dashboard Admin
@endsection

@section('content')
<div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Diri Pelamar</h4>
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datadiri as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->datadiri->nama_lengkap }}</td>
                                <td>{{ $data->datadiri->jenis_kelamin }}</td>
                                <td>{{ $data->datadiri->umur }}</td>
                                <td>
                                    <a href="{{ route('pelamar-datadiri.show', $data->datadiri->id) }}"
                                        class="btn btn-success btn-sm">detail</a>
                                    <a href="#" class="btn btn-danger btn-sm">delete</a>
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