<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datalaporan extends Model
{
    use HasFactory;
    protected $table = "datalaporan";
    protected $fillable =[
        'tanggal',
        'nama',
        'acara',
        'lokasi',
        'deskripsi',
        'catatan',
    ];
}
