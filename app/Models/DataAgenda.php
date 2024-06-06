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
        'tgl_pelaksanaan',
        'waktu_pelaksanaan',
        'status',
    ];
}
