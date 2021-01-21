<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    protected $table = "kontak";

    protected $fillable = ['nama','email','website','pesan'];
}