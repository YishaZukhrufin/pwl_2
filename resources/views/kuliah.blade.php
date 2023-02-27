@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pengalaman Kuliah</h3>

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
            Pengalaman saya selama berkuliah di Polinema :
            <br>
            Halo saya Yisha Zukhrufin, saat ini saya sedang menjalani semester 4 Prodi D4 Teknik Informatika
            Jurusan Teknologi Informasi <br>
            Sekarang saya sedang menyukai mata kuliah Pemrograman Web Lanjut. Banyak pengalaman dan saya bisa
            belajar mengenai hal-hal baru. Agar wawasan saya mengenai pembuatan Web lebih luas lagi.
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