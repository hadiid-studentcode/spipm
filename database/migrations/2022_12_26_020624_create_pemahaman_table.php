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
        Schema::create('pemahaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_peserta')->references('id')->on('peserta')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_materi')->references('id')->on('materi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_pretest')->references('id')->on('pretest')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_posttest')->references('id')->on('posttest')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pemahaman');
    }
};
