<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = 'guru';
	protected $fillable = array('nama', 'nik', 'alamat', 'matapelajaran');
	public function siswa() {
		return $this->hasMany('siswa', 'guru_id');
	}
}
