<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAgenda extends Model
{
    use HasFactory;
    protected $table = "data_agenda";
    protected $fillable =[
        'id',
        'no_surat',
        'agenda_kegiatan',
        'nama',
        'waktu_pelaksanaan',
        'lokasi',
        'status',
    ];
}
