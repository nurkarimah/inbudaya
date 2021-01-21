@extends('layout.master')

@section ('content')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-link">
                        <ol class="breadcrumb float-sm-center">
                            <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                            <li class="breadcrumb-item active">Lihat</li>
                            <li class="breadcrumb-item fload-sm-right"><a href="/berita">Kembali</a></li>
                        </ol>
                    </div>
                    <!-- <a href="/blog" class="open_modal_tambah d-none d-sm-inline-block btn btn-succes shadow-sm float-sm-right">Kembali</a> -->
                    <div class="row">
                        <div class="col text-center">
                            <h2>{{ $blog->judul_blog }}</h2><p class="btn btn-success">{{ $blog->kategori_blog }}</p><br/>
                            <td><img width="500px" src="{{ url('/data_file/'.$blog->gambar)}}"></td><br/>
                            <p>{{ $blog->keterangan_gambar }}</p><br/>
                            <p>{{ $blog->isi_blog}}</p><br/>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Breadcrumb End -->

@endsection

    
   