@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Keluarga</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Pekerjaan</th>
                </tr>

                @foreach ($keluarga as $no => $kl)
                <tr>
                    <td>{{$kl->no}}</td>
                    <td>{{$kl->nama}}</td>
                    <td>{{$kl->status}}</td>
                    <td>{{$kl->jenis_kelamin}}</td>
                    <td>{{$kl->tangga_lahir}}</td>
                    <td>{{$kl->agama}}</td>
                    <td>{{$kl->pekerjaan}}</td>
                </tr>
                @endforeach
            </table>
        </div>

        {{-- <!-- /.card-body -->
        <div class="card=footer">
            Footer
        </div> --}}

        <!-- /.card-footer -->
    </div>
    <!-- /.card -->

    </section>
@endsection