<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = "blog";

    protected $fillable = ['judul_blog','isi_blog','gambar','keterangan_gambar',"kategori_blog"];
}
