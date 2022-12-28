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
        Schema::create('fasilitator', function (Blueprint $table) {
            $table->id();
            $table->string('nama',30);
            $table->string('nba',10)->nullable();
            $table->string('wa',20);
            $table->enum('jk',['laki-laki','perempuan']);
            $table->string('jabatan',50);
            $table->string('foto',50)->nullable();
            $table->string('fasili_pendamping')->nullable();
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
        Schema::dropIfExists('fasilitator');
    }
};
