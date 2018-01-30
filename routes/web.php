<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\siswa;
use App\kelas;

Route::get('/', function () {
    return view('welcome');
});

Route::get('namawali', function() {
		$ac = siswa::where('nama', '=', 'Ade Ray')->first();
		return $ac->wali->nama;

	});

Route::get('namakelas', function() {

		$aw = siswa::where('nama', '=', 'Haikal Maulana Firdaus')->first();
		return $aw->kelas->namakelas;

	});

Route::get('namaguru', function() {

		$ay = siswa::where('nama', '=', 'Haikal Maulana Firdaus')->first();
		return $ay->guru->nama;

	});

Route::get('matapelajaran', function() {
		$ade = siswa::where('nama', '=', 'Ade Ray')->first();

		foreach ($ade->mapel as $temp) 
			echo '<li>' . $temp->namamapel . '</li>';
	});

Route::get('siswa', function() {

		
		$siswa = siswa::with('wali', 'guru', 'mapel')->get();

		
		return View::make('siswa', compact('siswa'));
	});


