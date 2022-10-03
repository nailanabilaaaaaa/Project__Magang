<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_id');
            $table->string('nama_sub_data')->nullable();
            $table->string('nama_sub_sub_data')->nullable();
            $table->foreign('data_id')->references('id')->on('data')->onDelete('cascade');
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
        Schema::dropIfExists('sub_data');
    }
}
