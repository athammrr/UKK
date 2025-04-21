<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fahotel extends Model
{
    use HasFactory;

    protected $table = 'fahotels';
    protected $fillable = [
        'nama_fasilitas',
        'status',
        'keterangan',
        'image',
    ];
}
