@extends('layout.master')

@section ('content')
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="card-body">
            <h2 class="text-center">Selamat datang di Portal Berita <b>INBUDAYA</B></h2>
            </div>
        </div>
    </div>
</section>
<hr>
<br>

<section class="blog-section spad">
        <div class="container">
            <div class="row">
                @foreach($blog as $b)
                <div class="col-lg-9">
                    <div class="blog-item">
                        <div class="bi-pic">
                            <figure>
                            <img class="card-image-top" width="150px" src="{{ url('/data_file/'.$b->gambar)}}" alt="card-image-cap">
                            </figure>
                        </div>
                        <div class="bi-text">
                            <div class="label">{{ $b->kategori_blog }}</div>
                            <h5><a href="blog/lihat/{{ $b->id }}">{{ $b->judul_blog }}</a>
                            </h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection