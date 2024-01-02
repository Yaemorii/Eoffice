<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSasaranIdToTujuansTable extends Migration
{
    public function up()
    {
        Schema::table('tujuans', function (Blueprint $table) {
            $table->unsignedBigInteger('sasaran_id')->nullable();; // Tambahkan kolom sasaran_id
            $table->foreign('sasaran_id')->references('id')->on('sasarans'); // Tambahkan constraint foreign key
        });
    }

    public function down()
    {
        Schema::table('tujuans', function (Blueprint $table) {
            $table->dropForeign(['sasaran_id']); // Drop foreign key constraint
            $table->dropColumn('sasaran_id'); // Drop kolom sasaran_id
        });
    }
}
