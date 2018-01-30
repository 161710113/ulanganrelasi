<?php

use Illuminate\Database\Seeder;
use App\guru;
use App\siswa;
use App\wali;
use App\kelas;
use App\mapel;

class soal1seeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->delete();
		DB::table('wali')->delete();
		DB::table('guru')->delete();
		DB::table('kelas')->delete();
		DB::table('mapel')->delete();
		DB::table('mapelsiswa')->delete();

		$guru = guru::create(array(
			'nama' => 'Budi Bram',
			'nik' => '12368618263',
			'alamat' => 'Bandung',
			'matapelajaran' => 'Bahasa Inggris'));

		$kelas = kelas::create(array(
			'namakelas' => 'XI RPL 1'));

		$a = siswa::create(array(
			'nama' => 'Haikal Maulana Firdaus',
			'nis'  => '42424242424',
			'guru_id' => $guru->id,
			'kelas_id' => $kelas->id));

		$b = siswa::create(array(
			'nama' => 'Ade Ray',
			'nis'  => '44141414141',
			'guru_id' => $guru->id,
			'kelas_id' => $kelas->id ));

		wali::create(array(
			'nama'  => 'Eddy Supriyono',
			'Alamat' => 'Baleendah',
			'siswa_id' => $a->id
		));
		
		wali::create(array(
			'nama'  => 'Bapaknya',
			'Alamat' => 'Indonesia',
			'siswa_id' => $b->id
		));

		$matematika = mapel::create(array(
			'namamapel' => 'Matematika', 
			'kkm' => '80'));
		$inggris = mapel::create(array(
			'namamapel' => 'Bahasa Inggris', 
			'kkm' => '80'));

		$a->mapel()->attach($matematika->id);
		$b->mapel()->attach($inggris->id);
	}
}