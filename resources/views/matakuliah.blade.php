@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DAFTAR MATAKULIAH</h3>

            {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div> --}}
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Dosen Pengampu</th>
                    <th>Jam</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
      
                @foreach ($matakuliah as $no => $m)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$m->kode_mk}}</td>
                  <td>{{$m->nama_matkul}}</td>
                  <td>{{$m->sks}}</td>
                  <td>{{$m->nama_dosen}}</td>
                  <td>{{$m->jam}}</td>
                  <td>{{$m->semester}}</td>
                  <td>{{$m->nilai}}</td>
                </tr>
                @endforeach
              </table>   
    </div>
    <!-- /.card -->

    </section>
@endsection