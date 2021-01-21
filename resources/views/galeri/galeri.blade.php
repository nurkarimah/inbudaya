@extends('layout.master')

@section('content')

 <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-link">
                        <ol class="breadcrumb float-sm-center">
                            <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
                            <li class="breadcrumb-item active">Galeri</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/barang/tambah" class="open_modal_tambah d-none d-sm-inline-block btn btn-primary shadow-sm my-2 my-sm-3">Tambah</a>
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-controls">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <li data-filter=".kebudayaan">Kebudayaan</li>
                            <li data-filter=".acara">Acara</li>
                            <li data-filter=".sejarah">Sejarah</li>
                            <!-- <li data-filter=".tari">Tra</li>
                            <li data-filter=".baju">Baju Adat</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="gallery-filter">
                        <div class="gf-item set-bg kebudayaan" data-setbg="img/gallery/48306_large.jpg">
                            <a href="img/gallery/48306_large.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item small-height set-bg acara" data-setbg="img/gallery/agartha.jpg">
                            <a href="img/gallery/agartha.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-small-height set-bg acara" data-setbg="img/gallery/bpty.jpg">
                            <a href="img/gallery/bpty.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item small-height set-bg kebudayaan" data-setbg="img/gallery/gadang.jpg">
                            <a href="img/gallery/gadang.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg sejarah" data-setbg="img/gallery/kerajaan.jpg">
                            <a href="img/gallery/kerajaan.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-height set-bg acara" data-setbg="img/gallery/prambanan.jpg">
                            <a href="img/gallery/prambanan.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg kebudayaan" data-setbg="img/gallery/Rumah-Adat-1.jpg">
                            <a href="img/gallery/Rumah-Adat-1.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg kebudayaan" data-setbg="img/gallery/REOG.jpg">
                            <a href="img/gallery/REOG.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item medium-large-height set-bg kebudayaan" data-setbg="img/gallery/senjata-tradisional.jpg">
                            <a href="img/gallery/senjata-tradisional.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-height set-bg acara" data-setbg="img/gallery/ramayana.jpg">
                            <a href="img/gallery/ramayana.jpg" class="gf-icon image-popup"><
span
                                    class="icon_plus"></span></a>
                        </div>
                        <!-- <div class="gf-item set-bg wedding" data-setbg="img/gallery/gallery-10.jpg">
                            <a href="img/gallery/gallery-10.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-height set-bg wedding" data-setbg="img/gallery/gallery-11.jpg">
                            <a href="img/gallery/gallery-11.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item small-height set-bg wedding" data-setbg="img/gallery/gallery-12.jpg">
                            <a href="img/gallery/gallery-12.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg wedding" data-setbg="img/gallery/gallery-13.jpg">
                            <a href="img/gallery/gallery-13.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-height set-bg wedding" data-setbg="img/gallery/gallery-14.jpg">
                            <a href="img/gallery/gallery-14.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg wedding" data-setbg="img/gallery/gallery-15.jpg">
                            <a href="img/gallery/gallery-15.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-height set-bg wedding" data-setbg="img/gallery/gallery-16.jpg">
                            <a href="img/gallery/gallery-16.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item medium-small-height set-bg wedding" data-setbg="img/gallery/gallery-17.jpg">
                            <a href="img/gallery/gallery-17.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more-btn portfolio-btn">
            <a href="#">Load More</a>
        </div>
    </div>
    <!-- Gallery Section End -->

@endsection