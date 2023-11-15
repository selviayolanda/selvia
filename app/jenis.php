<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    Protected $table ='jenis';
    Protected $primaryKey = 'id_jenis';
    public $timestamps = false;
    Protected $fillable =array('nama_jenis');

    public function barang(){
    	return $this->hasMany('App\barang','id_barang');
    }
}
