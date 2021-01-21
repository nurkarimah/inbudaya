@extends('layout.master2')

@section ('content')
<!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="card-header">
          <ol class="breadcrumb float-sm-right my-4">
              <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
          <h3 class="card-title my-4">Berikut Adalah Daftar Blog Anda!</h3>
        </div>

    <!-- .card-body -->
        <div class="card-body">
         <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
             <div class="row">
               <div class="col-sm-12 col-md-6"></div>
               <div class="col-sm-12 col-md-6"></div>
                
               <form class="form-inline mr-auto" action="/blog/cari" method="GET">
                    <input class="form-control mr-sm-2" name="cari" type="text" placeholder="Search" aria-label="Search">
                    <button type="submit" class="btn btn-success" >Search</button>
                </form>
                <br>
             </div>
             <div class="row">
             <div class="col-sm-12">
              <br/>
             <a href="/blogg" class="open_modal_tambah d-none d-sm-inline-block btn btn-success shadow-sm float-sm-right">Tampilkan Semua</a>
              <a href="/blog/tambah" class="open_modal_tambah d-none d-sm-inline-block btn btn-success shadow-sm">Tambah</a>
              <a href="/blog/trash" class="open_modal_tambah d-none d-sm-inline-block btn btn-danger shadow-sm">Tong Sampah</a>
             <br/>
             <br/>

             @if(session('pesan'))
              <div class="alert alert-success alert-block">
                <b>Berhasil</b>:{{session('pesan')}}
              </div>
              @endif

               <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                 <thead>
                 <tr role="row">
                   <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending">NO</th>
                   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">JUDUL BLOG</th>
                   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">ISI BLOG</th>
                   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">GAMBAR</th>
                   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">KETERANGAN GAMBAR</th>
                   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">KATEGORI BLOG</th>
                   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">TINDAKAN</th>
                   </tr>
                 </thead>
                 <tbody>
                 <?php $no = 1; ?>
                 @foreach($blog as $b)
                 <tr role="row" class="odd">
                   <td>{{ $no }}</td>
                   <td>{{ $b->judul_blog }}</td>
                   <td>{{ $b->isi_blog }}</td>
                   <td><img width="150px" src="{{ url('/data_file/'.$b->gambar)}}"></td>
                   <td>{{ $b->keterangan_gambar }}</td>
                   <td>{{ $b->kategori_blog }}</td>
                   <td>
                    <a href="/blog/lihat/{{ $b->id }}"><i class="fa fa-eye"></i> Lihat </a><br/>
                    <a href="/blog/edit/{{ $b->id }}"><i class="fa fa-edit"></i> Ubah </a><br/>
                    <a href="/blog/hapus/proses/{{ $b->id }}"><i class="fa fa-trash"></i> Hapus </a>
               </td>
             </tr>
             <?php $no++; ?>

             @endforeach
             </tbody>
          </table>
            </div>
            </div>
            Halaman : {{ $blog->currentPage() }} <br/>
            Jumlah Data : {{ $blog->total() }} <br/>
            Data Per Halaman : {{ $blog->perPage() }} <br/>

            {{ $blog->links() }}
            <div class="dataTable_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
            </div>
            <div class="col-sm-12 col-md-7 float-sm-right">
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
