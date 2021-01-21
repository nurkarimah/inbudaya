@extends('layout.master')

@section ('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad">
    <div class="container">
        <div class="bo-link">
            <ol class="breadcrumb float-sm-center">
                <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
                <li class="breadcrumb-item active">Berita</li>
                <li class="breadcrumb-item active">Lihat</li>
                <li class="breadcrumb-item fload-sm-right"><a href="/berita">Kembali</a></li>
            </ol>
           <!--  <a href="/berita" class="open_modal_tambah d-none d-sm-inline-block btn btn-success shadow-sm float-sm-right">Kembali</a> -->
        </div>
        <div class="row">
            
            <div class="col text-center">
                <h2>{{ $berita->judulBerita }}</h2><p class="btn btn-success shadow-sm">{{ $berita->kategoriBerita }}</p><br/>
                <td><img width="500px" src="{{ url('/data_file/'.$berita->gambarBerita)}}"></td><br/>
                <p>{{ $berita->keteranganGambarBerita }}</p><br/>
                <p>{{ $berita->isiBerita }}</p><br/>
            </div>
        </div>
    </div>
</div>
    <!-- Breadcrumb End -->

    
        


    <!-- Blog Section End -->

@endsection