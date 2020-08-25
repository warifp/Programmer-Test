<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nim');
            $table->unsignedBigInteger('nilai_id')->nullable()->default(null);
            $table->unsignedBigInteger('mata_kuliah_id')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('nilai_id')->references('id')->on('nilai')->onDelete('set null');
            $table->foreign('mata_kuliah_id')->references('id')->on('mata_kuliah')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
