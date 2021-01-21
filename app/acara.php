<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class acara extends Model
{
    
	protected $table = "acara";
	

    protected $fillable = ['tema_acara', 'file', 'tgl_acara','jam_acara','lokasi_acara','keterangan'];
}
