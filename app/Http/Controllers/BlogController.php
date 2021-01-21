<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\blog;

class BlogController extends Controller
{
    public function userBlog()
    {
        $blog = DB::table('blog')->get();
        return view ('blog.userBlog',['blog' => $blog]);
    }

    public function index()
    {
        $blog = DB::table('blog')->paginate(5);
        return view('blog/blog', ['blog' => $blog]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $blog = DB::table('blog')
        ->where('judul_blog','like','%'.$cari.'%')
        ->paginate();

        return view('blog/blog',['blog' => $blog ]);
    }

    public function tambah()
    {
        $blog = blog::get();
        return view('blog/tambah',['blog' => $blog]);
    }

    public function proses_tambah(Request $request){
        $this->validate($request, [
            'judul_blog' => 'required',
            'isi_blog' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan_gambar' => 'required',
            'kategori_blog' => 'required',
        ]);

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        blog::create([
            'judul_blog' => $request->judul_blog,
            'isi_blog' => $request->isi_blog,
            'gambar' => $nama_file,
            'keterangan_gambar' =>$request->keterangan_gambar,
            'kategori_blog' => $request->kategori_blog,
            

        ]);
        return redirect('/blogg')->with('pesan','berhasil memasukan data');
    }

    public function proses_hapus($id)
    {
        $blog = blog::find($id);
        $blog->delete();
        return redirect('/blogg');
    }

    public function edit($id)
    {
        $blog = DB::table('blog')->where('id', $id)->first();
        return view('blog.edit', ['blog' => $blog]);
    }

    public function update($id, Request $request)
    {
        $blog = blog::find($id);
        $blog->judul_blog = $request->judul_blog;
        $blog->isi_blog = $request->isi_blog;
        $blog->gambar = $request->gambar;
        $blog->keterangan_gambar = $request->keterangan_gambar;
        $blog->kategori_blog = $request->kategori_blog;
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $blog->gambar = $nama_file;

        
        $blog->save();
        return redirect('/blogg');

    }

    public function lihat($id)
    {
        $blog = blog::find($id);

        return view('blog/lihat', ['blog' => $blog]);
    }

}
