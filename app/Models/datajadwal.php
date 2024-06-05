<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJadwal extends Model
{
    use HasFactory;
    protected $table = "data_jadwal";
    protected $fillable =[
        'id',
        'judul_kegiatan',
        'nama_pj',
        'tanggal',
        'waktu',
    ];
}
