<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $table ='pembeli';
    protected $primaryKey ='id_pembeli';
    public $timestamps =false;
    protected $fillable =array('nama','alamat','no_telp');
}
