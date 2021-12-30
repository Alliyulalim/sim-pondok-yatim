<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_donasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_donatur');
            $table->string('email')->unique();
            $table->integer('no_tlp');
            $table->string('nominal');
            $table->string('tgl_transfer');
            $table->string('nama_bank');
            $table->integer('no_rek');
            $table->string('transfer_kebank');
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
        Schema::dropIfExists('form_donasis');
    }
}
