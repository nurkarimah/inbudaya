<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use\App\kontak;

class KontakController extends Controller
{

    public function kontak()
    {
        $kontak = kontak::get();
        return view('kontak.kontak',['kontak' => $kontak]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'website' => 'required',
            'pesan' => 'required',
        ]);

        kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'website' =>$request->website,
            'pesan' => $request->pesan,

        ]);
        return redirect('/kontak')->with('pesan','berhasil mengirimkan tanggapan');
    }

    public function adminKontak()
    {
        $kontak = DB::table('kontak')->paginate(5);
        return view ('kontak/user',['kontak' => $kontak]);
    }

    public function deleteAdminKontak($id)
    {
        
        $kontak = kontak::where('id', $id)->delete();
        //passing data user yang didapat ke view edit.blade.php
        return redirect('/admin-kontak');
    }

    public function delete($id)
    {
        
        $kontak = kontak::where('id', $id)->delete();
        //passing data user yang didapat ke view edit.blade.php
        return redirect('/kontak');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $kontak = DB::table('kontak')
        ->where('judulkontak', 'like',"%".$cari."%")
        ->paginate();


        //mengirim data kontak ke view kontak
        return view('kontak/user',['kontak' => $kontak]);
    }
}
