@extends('layout.master2')

@section ('content')
<!-- Content Header (Page header) -->
<section class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 my-3">
            <h2>Blog</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right my-4">
              <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
              <li class="breadcrumb-item"><a href="/blogg">Blog</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tambahkan Blog Anda Sekarang !</h4>
          </div>
        </div>

    <!-- .card-body -->
        <div class="card-body">
         <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
             <div class="row">
               <div class="col-sm-12 col-md-6"></div>
               <div class="col-sm-12 col-md-6"></div>
             </div>
             <div class="row">
             <div class="col-sm-12">
             <a href = "/blog" class="open_modal_tambah d-none d-sm-inline-block btn-sm btn-success shadow-sm">Kembali</a>
             <form action="/blog/tambah/proses" method="POST" enctype="multipart/form-data"><br/>
             
             {{ csrf_field() }}

             <div class="form-group">
                  <b>Judul Blog</b>
                  <input class="form-control" name="judul_blog">
            </div>
            <div class="form-group">
                  <b>Isi Blog</b>
                  <textarea  class="form-control" name="isi_blog"></textarea>
            </div>
            <div class="form-group">
                  <b>Gambar</b><br/>
                  <input  type="file"  name="file">
            </div>
            <div class="form-group">
                  <b>Keterangan Gambar</b>
                  <input class="form-control" name="keterangan_gambar">   
            </div>
            <div class="form-group">
                  <b>Kategori Blog</b>
                  <input class="form-control" name="kategori_blog">
            </div>
                  <input type="submit" value="Upload" class="btn btn-success">
                  <button type="reset" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
    
                </form>
            </div>
            </div>
        </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </section>
        <!-- /.content -->
    @endsection 
