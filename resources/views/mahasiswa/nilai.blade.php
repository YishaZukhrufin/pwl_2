@extends('layout.template')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DATA MAHASISWA</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <h2 class="text-center"><b>KARTU HASIL STUDI (KHS)</b></h2>
        <p><span class="font-weight-bold"><b>Nim : </b>{{$mahasiswa->nim}}</span></p> 
        <p><span class="font-weight-bold"><b>Nama : </b>{{$mahasiswa->nama}}</span></p> 
        <p><span class="font-weight-bold"><b>Kelas : </b>{{$mahasiswa->kelas->nama_kelas}}</span></p>

        <table class="table table-striped">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>Nama Dosen</th>
              <th>Jam</th>
              <th>Semester</th>
              <th>Nilai</th>
            </tr>
          </thead>
          <tbody>
            @if($khs->count()>0)
              @foreach($khs as $row)
              <tr>
                <td>{{$row->matakuliah->kode_mk}}</td>
                <td>{{$row->matakuliah->nama_matkul}}</td>
                <td>{{$row->matakuliah->sks}}</td>
                <td>{{$row->matakuliah->nama_dosen}}</td>
                <td>{{$row->matakuliah->jam}}</td>
                <td>{{$row->matakuliah->semester}}</td>
                <td>{{$row->matakuliah->nilai}}</td>
              </tr>
              @endforeach
            @else
            <tr>
              <td colspan="7" class="text-center">Data tidak ada</td>
            </tr>
            @endif
          </tbody>
        </table>
        <a href="{{ url('/mahasiswa/khs/' . $mahasiswa->id) }}" class="btn btn-primary">Cetak KRS</a>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
@endsection