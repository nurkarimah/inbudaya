<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Berita;

class BeritaController extends Controller
{
    public function userBerita()
    {
        $berita = DB::table('berita')->get();
        return view ('berita.userBerita',['berita' => $berita]);
        // var_dump($berita);
    }

    public function berita()
    {
        $berita = DB::table('berita')->paginate(5);
        return view ('berita/berita',['berita' => $berita]);
    }

    public function tambah()
    {
    	$berita = berita::get();
    	//mengerahkan untuk ke form input data
    	return view('berita/tambah',['berita' => $berita]);
    }

    public function store(Request $request)
    {	
    	$this->validate($request, [
    		'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
    		'nama' => 'required',
            'isi' => 'required',
    		'keterangan' => 'required',
            'kategori' => 'required',
    	]);

    	$file = $request->file('file');

    	$nama_file = time()."_".$file->getClientOriginalName();

    	$tujuan_upload = 'data_file';
    	$file->move($tujuan_upload,$nama_file);

    	berita::create([
    		'judulBerita' => $request->nama,
    		'isiBerita' => $request->isi,
    		'gambarBerita' => $nama_file,
    		'keteranganGambarBerita' => $request->keterangan,
            'kategoriBerita' => $request->kategori,
    	]);
        return redirect('/berita')->with('pesan','berhasil memasukan data');
    }

    public function lihat($id)
    {
        $berita = berita::find($id);
        //mengerahkan untuk ke form input data
        return view('berita.lihat', ['berita' => $berita]);
    }

    public function ubah($id)
    {
        $berita = DB::table('berita')->where('id', $id)->first();
        return view('berita.ubah', ['berita' => $berita]);
    }

    public function update($id, Request $request)
    {
        $berita = berita::find($id);

        $berita->judulBerita = $request->nama;
        $berita->isiBerita = $request->isi;
        $berita->keteranganGambarBerita = $request->keterangan;
        $berita->kategoriBerita = $request->kategori;
        
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        
        // $berita = DB::table('berita')->insert($berita);
        $berita->gambarBerita = $nama_file;
        $berita->save();
        return redirect('/berita')->with('pesan','berhasil mengubah data');
        

    }

    public function delete($id)
    {
        
        $berita = berita::where('id', $id)->delete();
        //passing data user yang didapat ke view edit.blade.php
        return redirect('/berita');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $berita = DB::table('berita')
        ->where('judulBerita', 'like',"%".$cari."%")
        ->paginate();


        //mengirim data berita ke view berita
        return view('berita/berita',['berita' => $berita]);
    }
}
