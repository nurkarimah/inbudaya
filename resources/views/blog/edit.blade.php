@extends('layout.master2')

@section ('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
          <h3 class="card-title">Update Blog</h3>
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
                <a href="/blog/edit/" class="open_modal_tambah d-none d-sm-inline-block btn btn-primary shadow-sm">Edit blog</a>

                  <form action="/blog/update/{{$blog->id}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field()}}
                      {{ method_field('PUT') }}
                      <div class="form-group">
                        <div class="form-group">
                          <input type="hidden" name="id" class="form-control" value="{{$blog->id}}">
                        </div>
                        <label for="judul_blog">Judul Blog</label>
                        <input type="varchar" name="judul_blog" class="form-control" value="{{$blog->judul_blog}}" required="required">
                      </div>
                      <div class="form-group">
                        <label for="isi_blog">Isi Blog</label>
                        <input type="varchar" name="isi_blog" class="form-control" value="{{$blog->isi_blog}}" required="required">
                      </div>
                      <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <img width="150px" src="{{ url('/data_file/'.$blog->gambar)}}"><br/><br/>
                        <input type="file" name="file">
                      </div>
                      <div class="form-group">
                        <label for="keterangan_gambar">Keterangan Gambar</label>
                        <input type="varchar" name="keterangan_gambar" class="form-control" value="{{$blog->keterangan_gambar}}" required="required">
                      </div>
                      <div class="form-group">
                        <label for="kategori_blog">Kategori Blog</label>
                        <input type="varchar" name="kategori_blog" class="form-control" value="{{$blog->kategori_blog}}" required="required">
                      </div>
                      <div class="model-footer">
                        <button class="btn btn-success" type="submit" value="Simpan Data">Confirm</button>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
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





