<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamars';
    protected $fillable = [
        'tipe',
        'jumlah_kamar',
        'harga',
        'image',
        'keterangan',
    ];  

    public function fakamar()
    {
        return $this->hasMany(FaKamar::class, 'kamar_id','id');
    }
}
