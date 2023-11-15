<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table ='barang';
    protected $primaryKey ='id_barang';
    public $timestamps = false;
    protected $fillable = array('nama_barang','harga','stok','tgl_expired','id_jenis');

    public function jenis(){
    	return $this->belongsTo('App\jenis','id_jenis');
    }
    public function detail_penjualan(){
    	return $this->hasMany('App\Detail_Penjualan','id_detail_penjualan');
    }
}
