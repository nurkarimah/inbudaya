@extends('layout/master2')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Acara</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Acara</li>
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
          <h3 class="card-title">Update Acara</h3>
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

          
               <a href ="/acara" class="open_modal_tambah d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Kembali</a></br>
			   <form action="/acara/update/{{ $acara->id }}" method="post" enctype="multipart/form-data">
			   
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
					
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="{{$acara->id}}">
                </div>
                <div class="form-group">
                    <label for="tema_acara">Tema Acara</label>
                    <input type="text" name="tema_acara" class="form-control" value="{{$acara->tema_acara}}" require="required">
                </div>
				<div class="form-group">
                    <label for="file">Foto</label><br/>
					<td><img width="150px" src="{{ url('/data_file/' .$acara->file) }}" ></td><br/>
                    <input type="file" name="file">
                </div>
                <div class="form-group">
                    <label for="tgl_acara">Tgl Acara</label>
                    <input type="date" name="tgl_acara" class="form-control" value="{{$acara->tgl_acara}}" require="required">
                </div> <div class="form-group">
				
				<div class="form-group">
                    <label for="jam_acara">Jam Acara</label>
                    <input type="time" name="jam_acara" class="form-control" value="{{$acara->jam_acara}}" require="required">
                </div> <div class="form-group">
				
				<div class="form-group">
                    <label for="lokasi_acara">Lokasi Acara</label>
                    <input type="text" name="lokasi_acara" class="form-control" value="{{$acara->lokasi_acara}}" require="required">
                </div> <div class="form-group">
				
				<div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="{{$acara->keterangan}}" require="required">
                </div> 
                   
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" value="Simpan">Simpan</button>
                    <!-- <button type="reset" class="btn btn--danger" data-dismiss="modal" aria-hidden="true">Cancel</button> -->
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