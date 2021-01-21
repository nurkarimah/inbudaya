@extends('layout.master2')

@section ('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Berita</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
              <li class="breadcrumb-item">Berita</li>
              <li class="breadcrumb-item active">Upload</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Silahkan Tambahkan Berita Anda!</h3>
        </div>
        <!-- /.card-body -->
        <div class="card-body">
          <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              
                
              <div class="col-sm-12 col-md-6"></div>
              <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <a href="/berita" class="open_modal_tambah d-none d-sm-inline-block btn btn-success shadow-sm">Kembali</a>
                <form action="/berita/tambah/store" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                <div class="form-group">
                  <label for="judulBerita"><b>Judul Berita</b></label>
                  <input class="form-control" name="nama"></input>
                </div>
                <div class="form-group">
                  <label for="isiBerita"><b>Isi Berita</b></label>
                  <textarea class="form-control"  name="isi"></textarea>
                </div>
                <div class="form-group">
                  <label for="gambarBerita"><b>Foto</b></label><br/>
                  <input type="file" name="file">
                </div>
                <div class="form-group">
                  <label for="keteranganGambarBerita"><b>Keterangan Foto</b></label>
                  <input class="form-control" name="keterangan"></input>
                </div>
                <div class="form-group">
                  <label for="kategoriBerita"><b>Kategori Berita</b></label>
                  <input class="form-control" name="kategori"></input>
                </div>
                <input type="submit" value="Upload" class="btn btn-success">
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
              </form>
            </div>
            <!-- <div class="model-footer">
              <input type="submit" value="Upload" class="btn btn-primary">
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
            </div> -->
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





