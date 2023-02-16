<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasukanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasukan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_sementara')->unsigned();
            $table->timestamps();

            $table->foreign('id_sementara')->references('id')->on('sementara')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemasukan');
    }
}
