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
            $table->string('Program'); 
            $table->string('agenda_kegiatan'); 
            $table->string('tgl_pelaksanaan'); 
            $table->string('waktu_pelaksanaan'); 
            $table->string('status'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_agendas');
    }
};