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
        Schema::create('data_jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kegiatan');
            $table->unsignedBigInteger('id_pegawai');// Menambahkan kolom id_pegawai setelah kolom judul_kegiatan
            $table->foreign('id_pegawai')->references('id')->on('data_pegawai')->onDelete('cascade'); // Definisi foreign key
            $table->string('tanggal');
            $table->string('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_jadwal');
    }
};
