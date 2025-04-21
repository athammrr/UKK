<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakamar extends Model
{
    use HasFactory;

    protected $table = 'fakamars';

    protected $fillable = [
        'kamar_id',
        'nama_fasilitas',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id','id');
    }
}
