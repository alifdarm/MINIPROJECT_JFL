<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnotateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annotate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('antrian_id')->nullable();
            $table->foreign('antrian_id')->references('id')->on('antrian');
            $table->unsignedBigInteger('instansi_id')->nullable();
            $table->foreign('instansi_id')->references('id')->on('instansi');
            $table->string('annotate',100)->nullabe();
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
        Schema::dropIfExists('annotate');
    }
}
