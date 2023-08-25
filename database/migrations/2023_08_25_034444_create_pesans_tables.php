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
        Schema::create('pesan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('kelamin');
            $table->bigInteger('no_identitas');
            $table->string('tipe_kamar');
            $table->bigInteger('harga');
            $table->date('tgl_pesan');
            $table->integer('durasi');
            $table->string('breakfast');
            $table->integer('discount');
            $table->string('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesans_tables');
    }
};
