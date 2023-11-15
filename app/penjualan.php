<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';
    public $timestamps = false;

    public function detail_penjualan(){
    	return $this->hasMany('App\detail_penjualan','id_detail_penjualan');
    }
}
