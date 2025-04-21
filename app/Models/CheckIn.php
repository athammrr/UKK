<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    use HasFactory;

    protected $table = 'check_ins';
    protected $fillable = [
        'nama_tamu',
        'email',
        'no_hp',
        'tipe',
        'jumlah_kamar',
        'check_in',
        'check_out',
        'status',
    ];

    protected $casts = [
        'tggl_pemesanan' => 'timestamp',
    ];

    public function kamar(){
        return $this->belongsTo(Kamar::class, 'tipe','id');
    }
}
