<!DOCTYPE html>
<html>

<head>
    <title>Hasil Seleksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Hasil Seleksi Tahap Dokumen</h4>
    </center>

    <table class='table table-bordered mt-4'>
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Alamat</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($hasil as $p)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$p->user->datadiri->nik}}</td>
                <td>{{$p->user->datadiri->nama_lengkap}}</td>
                <td>{{ $p->user->datadiri->lowongan->posisi }}</td>
                <td>{{$p->user->datadiri->alamat}}</td>
                <td>{{$p->user->datadiri->telephone}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>