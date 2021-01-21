@extends('layout.master2')

@section ('content')
<!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <ol class="breadcrumb float-sm-right my-4">
              <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
              <li class="breadcrumb-item active">Berita</li>
            </ol>
          <h3 class="card-title my-4">Ubah Informasi Berita Anda Sekarang!</h3>
        </div>
        <div class="card-body">
          Silahkan Mengubah Data Berita Berikut!
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
                <a href="/berita" class="open_modal_tambah d-none d-sm-inline-block btn btn-primary shadow-sm">Kembali</a>

                  <form action="/berita/update/{{ $berita->id}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <div class="form-group">
                        <div class="form-group">
                          <input type="hidden" name="id" class="form-control" value="{{$berita->id}}">
                        </div>
                        <label for="judulBerita"><b>Judul Berita</b></label>
                        <input type="varchar" name="nama" class="form-control" value="{{$berita->judulBerita}}" required="required">
                      </div>
                      <div class="form-group">
                        <label for="isiBerita"><b>Isi Berita</b></label>
                        <textarea type="varchar" name="isi" class="form-control" value="{{$berita->isiBerita}}" required="required"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="gambarBerita"><b>Ubah Foto</b></label><br/>
                        <input type="file" name="file"> 
                      </div>
                      <div class="form-group">
                        <label for="gambarBerita"><b>Foto Lama</b></label><br/>
                        <img width="150px" src="{{ url('/data_file/'.$berita->gambarBerita)}}"><br/><br/> 
                      </div>
                      <div class="form-group">
                        <label for="keteranganGambarBerita"><b>Keterangan Foto</b></label>
                        <input type="varchar" name="keterangan" class="form-control" value="{{$berita->keteranganGambarBerita}}" required="required">
                      </div>
                      <div class="form-group">
                        <label for="kategoriBerita"><b>Kategori Berita</b></label>
                        <input type="varchar" name="kategori" class="form-control" value="{{$berita->kategoriBerita}}" required="required">
                      </div>
                      <div class="model-footer">
                        <button class="btn btn-success" type="submit" value="Simpan Data">Simpan</button>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                      </div>
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





