<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    protected $fillable = [
        'dokter',
        'tanggal',
        'waktu',
        'tempat',
    ];
}
