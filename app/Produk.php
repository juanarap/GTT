<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'barangs';
    protected $primaryKey = 'id';
    protected $fillable =['id','nama_barang','gambar','harga','stok','keterangan'];
}
