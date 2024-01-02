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
        Schema::create('indikators', function (Blueprint $table) {
            $table->id();
            $table->string('indikator');
            $table->string('satuan_pengukuran');
            $table->string('target_kondisi_awal');
            $table->string('target_tahun_2021');
            $table->string('target_tahun_2022');
            $table->string('target_tahun_2023');
            $table->string('target_tahun_2024');
            $table->string('target_tahun_2025');
            $table->string('target_kondisi_akhir');
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
        Schema::dropIfExists('indikators');
    }
};
