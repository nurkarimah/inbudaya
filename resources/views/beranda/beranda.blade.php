@extends('layout.master')

@section ('content')
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/festival2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h2>InBudaya</h2>
                                <p>Selamat Datang di Halaman Utama Website InBudaya.</p>
                                <a href="#" class="primary-btn">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/keragaman.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h2>InBudaya</h2>
                                <p>Budaya Indonesia merupakan suatu keunikan yang dimiliki oleh dunia<br /> dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida accumsan lacus vel facilisis.</p>
                                <a href="#" class="primary-btn">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="img/tari.jpg" alt="">
                        <h3>Tari</h3>
                        <p>Tarian di Indonesia sangat Beragam. Pembawaannya yang unik menjadikan tarian ini dirasakan sangat membakar semangat jiwa muda Indonesia.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="img/Rumah1.jpg" alt="">
                        <h3>Rumah Adat</h3>
                        <p>Rumah adat terunik di Indonesia</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="img/kardin.jpg" alt="">
                        <h3>Senjata Tradisional</h3>
                        <p>Kardin Pisau senjata traditonal yang jarang di ketahui masyarakat Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Categories Section Begin -->
    <section class="categories-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <h2>Kategori</h2>
                        <p>Kami menyajikan berbagai keragaman kebudayaan Indonesia.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="right-btn"><a href="#" class="primary-btn">Lihat Semua</a></div>
                </div>
            </div>
            <div class="categories-slider owl-carousel">
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/tari.jpg"></div>
                    <div class="cs-text">
                        <h4>Tari</h4>
                        <span>120 pictures</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/rumah1.jpg"></div>
                    <div class="cs-text">
                        <h4>Rumah Tradisional</h4>
                        <span>325 pictures</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/kardin.jpg"></div>
                    <div class="cs-text">
                        <h4>Senjata Tradisional</h4>
                        <span>540 pictures</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/keragaman.jpg"></div>
                    <div class="cs-text">
                        <h4>Kebudayaan</h4>
                        <span>120 pictures</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/festival2.png"></div>
                    <div class="cs-text">
                        <h4>Adat Istiadat</h4>
                        <span>120 pictures</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Postingan Terbaru</h2>
                    </div>
                    <div class="filter-controls">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <li data-filter=".kebudayaan">kebudayaan</li>
                            <li data-filter=".acara">Acara</li>
                            <li data-filter=".sejarah">Sejara</li>
                            <li data-filter=".pertunjukan">Pertunjukan</li>
                            <li data-filter=".videos">Video</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="portfolio-filter">
                        <div class="pf-item set-bg kebudayaan" data-setbg="img/tari.jpg">
                            <a href="img/tari.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>TARI KECAK</h4>
                                <span>Kebudayaan</span>
                            </div>
                        </div>
                        <div class="pf-item large-width large-height set-bg kebudayaan"
                            data-setbg="img/tari2.jpg">
                            <a href="img/tari2.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>TARI KECAK</h4>
                                <span>Tari</span>
                            </div>
                        </div>
                        <div class="pf-item large-width set-bg kebudayaan" data-setbg="img/kardin.jpg">
                            <a href="img/kardin.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>KARDIN</h4>
                                <span>Senjata Traditional</span>
                            </div>
                        </div>
                        <div class="pf-item large-height set-bg wedding" data-setbg="img/budaya.jpg">
                            <a href="img/budaya.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>TARI MERAK</h4>
                                <span>Tari</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg kebudayaan" data-setbg="img/rumah1.jpg">
                            <a href="img/rumah1.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>RUMAH GADANG</h4>
                                <span>Rumah Adat</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg pertunjukan" data-setbg="img/gallery/REOG.jpg">
                            <a href="img/gallery/REOG.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>REOG</h4>
                                <span>Pertunjukan</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg fashion" data-setbg="img/gallery/Tari_Mandau.jpg">
                            <a href="img/gallery/Tari_Mandau.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>TARI MANDAU</h4>
                                <span>Kebudayaan</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg kebudayaan" data-setbg="img/gallery/gadang.jpg">
                            <a href="img/gallery/gadang.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>RUMAH GADANG</h4>
                                <span>Rumah Adat</span>
                            </div>
                        </div>
                        <div class="pf-item large-width set-bg acara" data-setbg="img/gallery/prambanan.jpg">
                            <a href="img/gallery/prambanan.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>PRAMBANAN JAZZ</h4>
                                <span>Acara</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg sejarah" data-setbg="img/gallery/kerajaan.jpg">
                            <a href="img/gallery/kerajaan.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>KERAJAAN MATARAM</h4>
                                <span>Sejarah</span>
                            </div>
                        </div>
                        <div class="pf-item large-width large-height set-bg acara"
                            data-setbg="img/gallery/ramayana.jpg">
                            <a href="img/gallery/ramayana.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>FESTIVAL RAMAYANA</h4>
                                <span>Acara</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more-btn">
            <a href="/galeri">Lebih Banyak</a>
        </div>
    </section>
    <!-- Portfolio Section End -->
@endsection
