<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\acara;

class AcaraController extends Controller
{
	public function userAcara()
	{
		$acara = DB::table('acara')->get();
        return view ('acara.userAcara',['acara' => $acara]);
    }

    public function acara()
    {
        //$acara = acara::all();
		
		$acara = DB::table('acara')->paginate(3);
		
		//$acara = acara::paginate(3);
        return view('acara/acara', ['acara' => $acara]);
    }
	
	 public function cari(Request $request)
    {
		$cari = $request->cari;
		
		$acara = DB::table('acara')
        ->where('tema_acara','like',"%".$cari."%")
        ->paginate();
		
        return view('acara/acara', ['acara' => $acara]);
    }

    public function tambah()
    {
        return view('acara/tambah');
    }

    public function store(Request $request)
    {
		
		$this->validate($request, [
			'tema_acara' => 'required',
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'tgl_acara' => 'required',
			'jam_acara' => 'required',
			'lokasi_acara' => 'required',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		acara::create([
			'tema_acara' => $request->tema_acara,
			'file' => $nama_file,
			'tgl_acara' => $request->tgl_acara,
			'jam_acara' => $request->jam_acara,
			'lokasi_acara' => $request->lokasi_acara,
			'keterangan' => $request->keterangan,
		]);

		
		return redirect('/acara')->with('pesan','berhasil memasukan data');

        /* $acara = new acara;

        $acara->tema_acara = $request->tema_acara;
		$acara->gambar = $request->gambar;
        $acara->tgl_acara = $request->tgl_acara;
        $acara->jam_acara = $request->jam_acara;
        $acara->lokasi_acara = $request->lokasi_acara;
        $acara->keterangan = $request->keterangan;
        

        $acara->save();
        return redirect('/acara');
 */
    }
	
	public function edit($id)
    {
        $acara = acara::find($id);
        return view('acara/edit', ['acara' => $acara]);
    }

    public function update($id, Request $request)
    {
        $acara = acara::find($id);
        $acara->tema_acara = $request->tema_acara;
        $acara->tgl_acara = $request->tgl_acara;
        $acara->jam_gambar = $request->jam_gambar;
        $acara->lokasi_acara = $request->lokasi_acara;
        $acara->keterangan = $request->keterangan;

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $acara->file = $nama_file;

        
        $acara->save();
        return redirect('/acara');

    }

    public function delete($id)
    {
        $acara = acara::where('id', $id)->delete();
        return redirect('/acara')->with('pesan','berhasil hapus data');

    }
	
	public function lihat ($id)
	{
		$acara = acara::find($id);
		
		return view('acara/lihat', ['acara' => $acara]);
	}


}
