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
        Schema::table('data_jadwal', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pegawai')->after('judul_kegiatan'); // Menambahkan kolom id_pegawai setelah kolom judul_kegiatan
            $table->foreign('id_pegawai')->references('id')->on('data_pegawai')->onDelete('cascade'); // Definisi foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_jadwal', function (Blueprint $table) {
            $table->dropForeign(['id_pegawai']); // Drop foreign key
            $table->dropColumn('id_pegawai'); // Drop kolom id_pegawai
        });
    }
};
