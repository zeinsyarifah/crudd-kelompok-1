<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use I11uminate\Database\Eloquent\Model;


class Buku extends Model

{
    
    use HasFactory;
    protected $fillable = [
        'kode_buku',
        'judul',
        'kategori',
        'penulis',
        'tahun_terbit',
        'jumlah',
        'keterangan'
    ];
}
