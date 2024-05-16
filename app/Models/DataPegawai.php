<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPegawai extends Model
{
    use HasFactory;
    protected $table = "data_pegawai";
    protected $fillable =[
        'id',
        'nama',
        'email',
        'no_hp',
    ];
}
