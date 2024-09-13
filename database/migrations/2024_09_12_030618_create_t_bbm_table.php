<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_bbm', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->unsignedBigInteger('nama');
            $table->unsignedBigInteger('nopol');
            $table->string('nama_kendaraan');
            $table->double('nominal');
            $table->timestamps();
            $table->foreign('nopol')->references('id')->on('t_kendaraan');
            $table->foreign('nama')->references('id')->on('t_pegawai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bbm');
    }
};
