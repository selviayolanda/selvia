<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table='user';
	protected $primaryKey='id_user';
	public $timestamps = false;
	protected $fillable=array('username','password','level');
}
