<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->enum('tingkatan', ['X', 'XI', 'XII']);
            $table->enum('no_kelas', ['1', '2', '3', '4', '5']);
            $table->bigInteger('id_jurusan')->unsigned();
            $table->bigInteger('id_tahun')->unsigned();
            $table->timestamps();

            $table->foreign('id_tahun')->references('id')->on('tahun_ajaran')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jurusan')->references('id')->on('jurusan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}
