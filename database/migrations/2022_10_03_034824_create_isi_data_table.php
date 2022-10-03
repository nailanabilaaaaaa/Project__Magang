<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_id');
            $table->unsignedBigInteger('sub_data_id');
            $table->string('nama_isi_data')->nullable();
            $table->string('jumlah_data')->nullable();
            $table->string('tahun_data')->nullable();
            $table->foreign('data_id')->references('id')->on('data')->onDelete('cascade');
            $table->foreign('sub_data_id')->references('id')->on('sub_data')->onDelete('cascade');
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
        Schema::dropIfExists('isi_data');
    }
}
