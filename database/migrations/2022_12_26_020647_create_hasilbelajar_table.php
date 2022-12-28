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
        Schema::create('hasilbelajar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pemahaman')->references('id')->on('pemahaman')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('total_nilai');
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
        Schema::dropIfExists('hasilbelajar');
    }
};
