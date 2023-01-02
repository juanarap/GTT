<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesananDetail extends Model
{
    public function barang()
    {
        return $this->belongsTo('App\Produk','barang_id','id');
        

    }
    public function pesanan()
    {
        return $this->belongsTo('App\Pesanan','pesanan_id','id');
        

    }

}
