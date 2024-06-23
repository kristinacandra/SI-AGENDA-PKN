<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datauser extends Model
{
    use HasFactory;
    protected $table = "datausers";
    protected $fillable =[
        'nama',
        'email',
        'password',
    ];
}
