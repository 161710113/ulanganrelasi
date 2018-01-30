<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
	protected $table = 'siswa';
	protected $fillable = array('nama', 'nis', 'guru_id', 'kelas_id');
	public function wali() {
		return $this->hasOne('App\wali', 'siswa_id');
	}

	public function guru() {
		return $this->belongsTo('App\guru', 'guru_id');
	}

	public function kelas() {
		return $this->belongsTo('App\kelas', 'kelas_id');
	}

	public function mapel() {
		return $this->belongsToMany('App\mapel', 'mapelsiswa', 'siswa_id', 'mapel_id');
	}


}
