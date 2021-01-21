@extends('layout/master')

@section('content')
<!-- Breadcrumb Begin --> 
	<div class="breadcrumb-option spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="bo-link">
						<ol class="breadcrumb float-sm-center">
							<li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
							<li class="breadcrumb-item active">Acara </li>
							<li class="breadcrumb-item active">Lihat</li>
							<li class="breadcrumb-item"><a href="/beranda">Kembali</a></li>
						</ol>
						
						<!-- <a href ="/acara" class="open_modal_tambah d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"> Kembali</a> -->
						
					</div>
					<div class="row">
						<div class="col text-center">
							<h1>{{ $acara->tema_acara }}</h1><br/>
							<td><img width="500px" src="{{ url('/data_file/' .$acara->file) }}" ></td><br/><br/>
							<p>Tanggal Acara : {{ $acara->tgl_acara }}</p>
							<p>Jam Acara : {{ $acara->jam_acara }}</p>
							<p>Lokasi Acara : {{ $acara->lokasi_acara }}</p><br/><br/>
							<p>{{ $acara->keterangan }}</p><br/>
						</div>
						
							
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End-->
	
	
@endsection
	