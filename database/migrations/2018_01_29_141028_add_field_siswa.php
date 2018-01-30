<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function($table) {
            $table->unsignedInteger('guru_id')->after('nis')->nullable();
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function($table) {
            $table->dropColumn('guru_id');
        });
    }
}
