<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InBudaya</title>

    <!-- Google Font -->
    <link rel="stylesheet" href={{url('plugins/fontawesome-free/css/all.min.css')}}>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href={{url("https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap")}} rel="stylesheet">
    <link href={{url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap")}} rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href={{url("css/bootstrap.min.css")}} type="text/css">
    <link rel="stylesheet" href={{url("css/font-awesome.min.css")}} type="text/css">
    <link rel="stylesheet" href={{url("css/elegant-icons.css")}} type="text/css">
    <link rel="stylesheet" href={{url("css/owl.carousel.min.css")}} type="text/css">
    <link rel="stylesheet" href={{url("css/magnific-popup.css")}} type="text/css">
    <link rel="stylesheet" href={{url("css/slicknav.min.css")}} type="text/css">
    <link rel="stylesheet" href={{url("css/style.css")}} type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="/beranda">
                            <img src="img/inbuday.png" alt="">
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li><a href="/beranda">Beranda</a></li>
                            <li><a href="/tentang">Tentang</a></li>
                            <li><a href="/user-berita">Berita</a></li>        
                            <li><a href="/user-acara">Acara</a>
                                <ul class="dropdown">
                                    <li><a href="/user-acara">Acara</a></li>
                                    <li><a href="/galeri">Galeri</a></li>
                                    <!-- <li><a href="/detailAcara">Detail Acara</a></li> -->
                                </ul>
                            </li>
                            <!-- <li><a href="/blog">Blog</a></li> -->
                            <li><a href="/user-blogg">Blog</a></li>
                            <li><a href="/kontak">Kontak</a></li>
                            
                        </ul>
                    </nav>
                    <nav class="navbar">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-3 fa fa-search" type="submit"></button>
                        </form>
                    </nav>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
    <!-- Content Header (Page header) -->
  </div>
    <!-- Breadcrumb Begin -->

<!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="/beranda">
                                <img src="img/inbuday.png" alt="">
                            </a>
                        </div>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.</p>
                        <div class="fa-social">
                            <a href="https://facebook.com/sinzteller"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/sinzteller"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UCI2Zi1iyM2ix6g0aa0RlFkQ"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://instagram.com/sinzteller"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Instagram</h5>
                        <div class="fw-instagram">
                            <img src="img/budaya.jpg" alt="">
                            <img src="img/tari.jpg" alt="">
                            <img src="img/rumah1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Alamat</h5>
                        <ul>
                            <li><a href="/beranda">Beranda</a></li>
                            <li><a href="/tentang">Tentang</a></li>
                            <li><a href="/berita">Berita</a></li>
                        </ul>
                        <ul>
                            <li><a href="/acara">Acara</a></li>
                            <li><a href="/kontak">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Subscribe</h5>
                        <p>Imolor amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="fw-subscribe">
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    
    <!-- Js Plugins -->
    <script src={{url("js/jquery-3.3.1.min.js")}}></script>
    <script src={{url("js/bootstrap.min.js")}}></script>
    <script src={{url("js/jquery.magnific-popup.min.js")}}></script>
    <script src={{url("js/isotope.pkgd.min.js")}}></script>
    <script src={{url("js/masonry.pkgd.min.js")}}></script>
    <script src={{url("js/jquery.slicknav.js")}}></script>
    <script src={{url("js/owl.carousel.min.js")}}></script>
    <script src={{url("js/main.js")}}></script>
</body>

</html>