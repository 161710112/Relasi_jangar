<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = 'walis';
    protected $fillable = ['nama','siswa_id'];
    public $timestamps = true;

    public function Siswa()
	{
		return $this->belongsTo('App\Siswa','siswa_id');
	}
}
