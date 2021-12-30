<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnakAsuhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak_asuhs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pengasuhs')->unsigned();
            $table->string('nama_anak');
            $table->string('jk');
            $table->date('tgl_lahir');
            $table->string('status');
            $table->foreign('id_pengasuh')->references('id')->on('pengasuhs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('anak_asuhs');
    }
}
