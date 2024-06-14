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
        'id_pegawai',
    ];

    public function pegawai()
    {
        return $this->belongsTo(DataPegawai::class,'id_pegawai','id');
    }

}
