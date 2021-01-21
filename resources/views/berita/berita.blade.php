@extends('layout.master2')

@section ('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <ol class="breadcrumb my-3 float-sm-right">
          <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
          <li class="breadcrumb-item active">Berita</li>
        </ol>
      <h3 class="card-title my-4">List Berita</h3>
    </div>
    <div class="card-body">
      Berikut adalah daftar list berita yag telah kamu buat!
    </div>
    <!-- /.card-body -->
    <div class="card-body">
      <div class="body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="col-sm-12 col-md-6"></div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <form class="form-inline mr-auto" action="/berita/cari" method="GET">
                  <input class="form-control mr-sm-2" type="text" placeholder="Cari Berita" name="cari" aria-label="Search">
                  <button type="submit" class="btn btn-success" value="CARI">Cari</button>
                </form>
              <br/>

              <a href="/berita" class="open_modal_tambah d-none d-sm-inline-block btn btn-success shadow-sm float-sm-right">Tampilkan Semua</a>
              <a href="/berita/tambah" class="open_modal_tambah d-none d-sm-inline-block btn btn-success shadow-sm">Tambah</a>
              <a href="/berita/trash" class="open_modal_tambah d-none d-sm-inline-block btn btn-danger shadow-sm">Tong Sampah</a>
              <br/>
              <br/>
              @if(session('pesan'))
              <div class="alert alert-success alert-block">
                <b>Berhasil</b> : {{session('pesan')}}
              </div>
              @endif
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <div class="card-body">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" ariacontrols="example2" rowspan="1" colspan="1" aria-sort="ascending">NO</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">JUDUL BERITA</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">ISI BERITA</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">GAMBAR</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">KETERANGAN GAMBAR</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">KATEGORI BERITA</th>
                    <th class="sorting" tabindex="0" aria-conrols="example2" rowspan="1" colspan="1">TINDAKAN</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $no = 1; ?>

                  @foreach($berita as $b)

                  <tr role="row" class="odd">
                    <td>{{ $no }}</td>
                    <td>{{ $b->judulBerita }}</td>
                    <td>{{ $b->isiBerita }}</td>
                    <td><img width="150px" src="{{ url('/data_file/'.$b->gambarBerita)}}"></td>
                    <td>{{ $b->keteranganGambarBerita }}</td>
                    <td>{{ $b->kategoriBerita }}</td>
                    <td>
                      <a href="berita/lihat/{{ $b->id }}"><i class="fa fa-eye"></i> Lihat</a><br/>
                      <a href="/berita/ubah/{{ $b->id }}"><i class="fa fa-edit"></i> Ubah</a><br/>
                      <a href="/berita/delete/{{ $b->id }}"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php $no++; ?>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              Halaman : {{ $berita->currentPage() }} <br/>
            Jumlah Data : {{ $berita->total() }} <br/>
            Data Per Halaman : {{ $berita->perPage() }} <br/>

            {{ $berita->links() }}
              <div class="dataTable_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTable_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disable" id="example2_previous"><a href="#" aria-control="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                  <li class="paginate_button page-item active"><a href="#" aria-control="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                  <li class="paginate_button page-item"><a href="#" aria-control="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                  <li class="paginate_button page-item"><a href="#" aria-control="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                  <li class="paginate_button page-item"><a href="#" aria-control="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                  <li class="paginate_button page-item"><a href="#" aria-control="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                  <li class="paginate_button page-item"><a href="#" aria-control="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                  <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-control="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->

      @endsection