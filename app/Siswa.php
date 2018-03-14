<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
     protected $fillable = ['nama','nim','kelas','alamat','guru_id'];
     public $timestamps = true;

	public function Guru()
	{
		return $this->belongsTo('App\Guru','guru_id');
	}

    public function Wali()
    {
    	return $this->hasOne('App\Wali','siswa_id');
    }
}
