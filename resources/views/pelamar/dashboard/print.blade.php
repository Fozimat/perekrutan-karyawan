<!DOCTYPE html>
<html>

<head>
    <title>Hasil Seleksi</title>
    <style>
        td {
            padding: 5px;
        }
    </style>
</head>

<body>

    <h4 style="text-align: center;text-decoration: underline;font-weight: bold;margin-bottom: 50px;">Hasil Seleksi Tahap
        Dokumen</h4>
    <p style="text-align: center;">Yang bertanda tangan dibawah ini, Pimpinan dari CV JROSA menerangkan bahwa:</p>
    <table style="margin: auto;">
        <tr>
            <td style="width: 150px;">NIK</td>
            <td>:</td>
            <td>{{ $hasil->user->datadiri->nik }}</td>
        </tr>
        <tr>
            <td style="width: 150px;">Nama</td>
            <td>:</td>
            <td>{{ $hasil->user->datadiri->nama_lengkap }}</td>
        </tr>
        <tr>
            <td style="width: 150px;">Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $hasil->user->datadiri->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td style="width: 150px;">Tempat/Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $hasil->user->datadiri->tempat_lahir }}, {{ date('d-m-Y',
                strtotime($hasil->user->datadiri->tanggal_lahir)) }}</td>
        </tr>
        <tr>
            <td style="width: 150px;">Alamat</td>
            <td>:</td>
            <td>{{ $hasil->user->datadiri->alamat }}</td>
        </tr>
    </table>
    <p style="text-align: center;">dinyatakan <strong>LULUS</strong> Tahap Seleksi Dokumen, Pelamar diminta datang ke
        Perusahaan
        Besok Jam 08.00 WIB</p>

    <table style="margin-left: 500px; margin-top: 50px;">
        <tr>
            <td>Yang Mengetahui</td>
        </tr>
        <tr>
            <td style="padding: 25px;"></td>
        </tr>
        <tr>
            <td>Manajer CV JROSA</td>
        </tr>
    </table>


</body>

</html>