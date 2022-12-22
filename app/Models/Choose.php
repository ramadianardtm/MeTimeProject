<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choose extends Model
{
    use HasFactory;

    //protected $fillable = ['image', 'name', 'rs', 'daerah', 'spesial1', 'spesial2', 'spesial3'];
    protected $guarded =['id'];

    
}
