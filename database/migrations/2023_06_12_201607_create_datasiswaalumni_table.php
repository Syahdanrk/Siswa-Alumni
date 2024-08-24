<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasiswaalumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasiswaalumni', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('foto');
            $table->text('tahun_masuk');
            $table->string('tahun_keluar');
            $table->string('lanjut');
            $table->string('dimana');
            $table->string('email');
            $table->string('no_telp');
            $table->text('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datasiswaalumni');
    }
}
