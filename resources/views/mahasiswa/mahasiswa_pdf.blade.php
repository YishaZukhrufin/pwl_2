<!DOCTYPE html>
<html>
<head>
    <title>Laporan KRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .text-center {
            text-align: center;
        }
        .table {
            width: 100%;
            margin: 0 1rem;
            color: #212529;
            border: 3px solid #262626;
        }
        table tr td, table tr th {
            border: 1px solid #262626;
            padding: 0.5rem;
        }
    </style>
</head>
<body>
<div class="text-center">
    <h3>Laporan KRS</h3>
</div>
<ul>
    <li><b>Nim : </b>{{ $mahasiswa->nim }}</li>
    <li><b>Nama : </b>{{ $mahasiswa->nama }}</li>
    <li><b>Kelas : </b>{{ $mahasiswa->kelas->nama_kelas }}</li>
    <li><b>Jenis Kelamin : </b>{{ $mahasiswa->jk }}</li>
    <li><b>Tempat Lahir : </b>{{ $mahasiswa->tempat_lahir }}</li>
    <li><b>Tanggal Lahir : </b>{{ $mahasiswa->tanggal_lahir }}</li>
    <li><b>Alamat : </b>{{ $mahasiswa->alamat }}</li>
    <li><b>No. Hp : </b>{{ $mahasiswa->hp }}</li>
</ul>
<table class="table text-center">
    <thead>
    <tr>
        <th>Kode</th>
        <th>MataKuliah</th>
        <th>SKS</th>
        <th>Dosen</th>
        <th>Jam</th>
        <th>Semester</th>
        <th>Nilai</th>
    </tr>
    </thead>
    <tbody>
    @if($khs->count() > 0)
        @foreach($khs as $row)
            <tr>
                    <td>{{ $row->matkul->kode_mk }}</td>
                    <td>{{ $row->matkul->nama_matkul }}</td>
                    <td>{{ $row->matkul->sks }}</td>
                    <td>{{ $row->matkul->nama_dosen }}</td>
                    <td>{{ $row->matkul->jam }}</td>
                    <td>{{ $row->matkul->semester }}</td>
                    <td>{{ $row->nilai}}</td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="6" class="text-center">Data tidak ada</td>
        </tr>
    @endif
    </tbody>
</table>
</body>
</html>