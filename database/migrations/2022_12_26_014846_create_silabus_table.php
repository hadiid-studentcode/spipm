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
        Schema::create('silabus', function (Blueprint $table) {
            $table->id();
            $table->string('jenis', 10);
            $table->text('standar_kompetensi');
            $table->text('kompetensi_dasar');
            $table->text('indikator');
            $table->string('nm_materi', 50);
            $table->string('deskripsi', 200);
            $table->text('strategi_pembelajaran');
            $table->integer('sks');
            $table->text('referensi_acuan');
            $table->text('penilian');
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
        Schema::dropIfExists('silabus');
    }
};
