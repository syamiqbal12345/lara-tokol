<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table="toko";
    protected $fillable = ["nama", "alamat", "pemilik", "telepon","email", "user_id",'pengguna__id'];
}
