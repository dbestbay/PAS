<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "tb_barangs";

    protected $primaryKey = 'id_barang';

    protected $fillable = ['nama_barang','stock','merk'];
}
