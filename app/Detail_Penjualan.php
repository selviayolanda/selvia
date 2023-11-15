<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Penjualan extends Model
{
    protected $table='detail_penjualan';
    protected $primaryKey='id_detail_penjualan';
    public $timestamps = false;
    protected $fillable=array('id_penjualan','id_barang','jumlah_beli','sub_total');

    public function penjualan(){
    	return $this->belongsTo('App\penjualan','id_penjualan');
    }
    public function barang(){
    	return $this->belongsTo('App\barang','id_barang');
    }
}
