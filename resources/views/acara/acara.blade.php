@extends('layout/master2')

@section('content')
       
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <ol class="breadcrumb float-sm-right my-4">
              <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
              <li class="breadcrumb-item active">Acara</li>
            </ol>
          <h2 class="card-title my-4">Acara</h2>
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
		  
		  <form class="form-inline mr-auto" action="/acara/cari" method="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button type="submit" class="btn btn-success">Search</button>
          </form><br>

          <a href ="/acara/tambah" class="open_modal_tambah d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"> Tambah</a>
		  <!-- <a href="/acara/sampah" class="open_model_tambah d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Sampah</a> -->
          </br>
          </br>
		  
		  @if(session('pesan'))
            <div class="alert alert-success alert-block">
              <b>Berhasil</b> : {{session('pesan')}}
            </div>
          @endif
		  
             <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">TEMA ACARA</th>
				  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">FOTO</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">TGL ACARA</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">JAM ACARA</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">LOKASI ACARA</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">KETERANGAN</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">TINDAKAN</th>
                </tr>
              </thead>
              <tbody>

              @foreach($acara as $b)

			  <tr role="row" class="odd">
                <td>{{ $b->id }}</td>
                <td>{{ $b->tema_acara }}</td>
				        <td><img width="150px" class="ui rounded image" src="{{ url('/data_file/' .$b->file) }}" ></td>
                <td>{{ $b->tgl_acara }}</td>
                <td>{{ $b->jam_acara }}</td>
                <td>{{ $b->lokasi_acara }}</td>
                <td>{{ $b->keterangan }}</td>
                <td>
                  <a href="/acara/lihat/{{ $b->id }}"><i class="fa fa-eye"></i> Lihat</a><br/>
					        <a href="/acara/edit/{{ $b->id }}"><i class="fa fa-edit"></i> Ubah</a><br/>
                  <a href="/acara/hapus/{{ $b->id }}"><i class="fa fa-trash"></i> Hapus</a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
            </div>
            </div> 
			
			<div class="row">
            <div class="col-sm-12 col-md-5">
              Halaman : {{ $acara->currentPage() }} <br/>
            Jumlah Data : {{ $acara->total() }} <br/>
            Data Per Halaman : {{ $acara->perPage() }} <br/>

            {{ $acara->links() }}
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
        </div>
        <!-- /.card --> 

    </section>
    <!-- /.content -->
@endsection


