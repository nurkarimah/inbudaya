@extends('layout.master2')

@section ('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <ol class="breadcrumb my-3 float-sm-right">
          <li class="breadcrumb-item"><a href="/dashboard">Beranda</a></li>
          <li class="breadcrumb-item active">kontak</li>
        </ol>
      <h3 class="card-title my-4">List kontak</h3>
    </div>
    <div class="card-body">
      Berikut adalah daftar list kontak yag telah kamu buat!
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
              <form class="form-inline mr-auto" action="/kontak/cari" method="GET">
                  <input class="form-control mr-sm-2" type="text" placeholder="Cari kontak" name="cari" aria-label="Search">
                  <button type="submit" class="btn btn-success" value="CARI">Cari</button>
                </form>
              <br/>

              <a href="/kontak" class="open_modal_tambah d-none d-sm-inline-block btn btn-success shadow-sm float-sm-right">Tampilkan Semua</a>
              <a href="/kontak/tambah" class="open_modal_tambah d-none d-sm-inline-block btn btn-success shadow-sm">Tambah</a>
              <a href="/kontak/trash" class="open_modal_tambah d-none d-sm-inline-block btn btn-danger shadow-sm">Tong Sampah</a>
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
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">NAMA</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">EMAIL</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">WEBSITE</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">PESAN</th>
                    <th class="sorting" tabindex="0" aria-conrols="example2" rowspan="1" colspan="1">TINDAKAN</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $no = 1; ?>

                  @foreach($kontak as $b)

                  <tr role="row" class="odd">
                    <td>{{ $no }}</td>
                    <td>{{ $b->nama }}</td>
                    <td>{{ $b->email }}</td>
                    <td>{{ $b->website }}</td>
                    <td>{{ $b->pesan }}</td>
                    <td>
                      <a href="/admin-kontak/hapus/{{ $b->id }}"><i class="fa fa-trash"></i> Hapus</a>
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
              Halaman : {{ $kontak->currentPage() }} <br/>
            Jumlah Data : {{ $kontak->total() }} <br/>
            Data Per Halaman : {{ $kontak->perPage() }} <br/>

            {{ $kontak->links() }}
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