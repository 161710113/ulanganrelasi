<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table = 'mapel';
	protected $fillable = array('namamapel', 'kkm');

	public function siswa() {
		return $this->belongsToMany('siswa', 'mapelsiswa', 'mapel_id', 'siswa_id');
	}

}
