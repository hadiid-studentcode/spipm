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
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('waktu_dari');
            $table->time('waktu_sampai');
            $table->foreignId('id_silabus')->references('id')->on('silabus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_fasilitator')->references('id')->on('fasilitator')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('status',["selesai","belum selesai"]);
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
        Schema::dropIfExists('materi');
    }
};
