@extends ('layout.master')

@section ('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad">
    <div class="container">
        <div class="bo-link">
            <ol class="breadcrumb float-sm-center">
                <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
                <li class="breadcrumb-item active">Kontak</li>
            </ol>
        </div>
        @if(session('pesan'))
        <div class="alert alert-success alert-block">
            <b>Berhasil</b> : {{session('pesan')}}
        </div>
        @endif
    </div>
</div>
    <!-- Breadcrumb End -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-text">
                        <h3>Hubungi Kami</h3>
                        <p>Bergabung bersama kami ! </br> Anda dapat bergabung bersama kami untuk lebih mencintai kebudayaan Indonesia.</p>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Alamat</h5>
                                <p>Universitas Amikom Yogyakarta, Jl. Ringroad Utara, Condongcatur, Depok, Sleman, Yogyakarta</p>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ct-text">
                                <h5>No Telepon</h5>
                                <ul>
                                    <li>081562832637</li>
                                    <li>085887232362</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Email</h5>
                                <p>inbudaya@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-form">
                        <h3>Bergabung bersama kami</h3>
                        <form action="/kontak/store" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <input type="text" placeholder="Nama" name="nama">
                            <input type="text" placeholder="Email" name="email">
                            <input type="text" placeholder="Website" name="website">
                            <textarea placeholder="pesan" name="pesan"></textarea>
                            <button type="submit" class="site-btn">Tambah</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
</br>
    <!-- Contact Section End -->

@endsection