<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datalaporan extends Model
{
    use HasFactory;
    protected $table = "data_pegawai";
    protected $fillable =[
        'nama',
        'no_hp',
        'role',
        'email',
    ];
}
