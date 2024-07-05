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
        Schema::create('data_agenda', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->string('agenda_kegiatan');
            $table->string('nama');
            $table->datetime('waktu_pelaksanaan');
            $table->string('lokasi');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_agenda');
    }
};
