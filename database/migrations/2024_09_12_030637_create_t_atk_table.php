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
        Schema::create('t_atk', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->unsignedBigInteger('nama'); // Tetap string jika ini adalah nama pemakai
            $table->unsignedBigInteger('barang_id'); // Mengacu pada id di t_barang
            $table->integer('jumlah_barang');
            $table->foreign('nama')->references('id')->on('t_pegawai');
            $table->foreign('barang_id')->references('id')->on('t_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_atk');
    }
};
