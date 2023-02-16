<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sementara', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kelas')->unsigned();
            $table->bigInteger('id_pengurus')->unsigned();
            $table->string('jumlah');
            $table->enum('status', ['sukses', 'cancel', 'unsukses']);
            $table->datetime('tanggal');
            $table->timestamps();

            $table->foreign('id_kelas')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pengurus')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sementara');
    }
};
