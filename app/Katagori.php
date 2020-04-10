<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Katagori extends Model
{
    protected $table="kategori";
    protected $fillable = ["nama","keterangan"];
}
