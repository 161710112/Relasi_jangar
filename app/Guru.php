<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus'; // -> meminta izin untuk mengakses table dosens
    protected $fillable = ['nama','nipd','alamat','mata_pelajaran']; // -> field apa saja yang boleh di isi -> fill = mengisi, able = boleh jadi fillable = boleh di isi
    public $timestamps = true; // penanggalan otomatis record kapan di isi dan di update di aktikfkan

    public function Siswa()
    {
    	return $this->hasMany('App\Siswa','guru_id');
    }
}
