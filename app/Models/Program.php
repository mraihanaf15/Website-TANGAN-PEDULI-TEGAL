<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'judul', 
        'deskripsi', 
        'gambar', 
        'status', 
        'tanggal_pelaksanaan',
        'foto_kegiatan' // Tambahkan ini untuk menyimpan banyak foto dokumentasi
    ];

    // Mengonversi data JSON di database menjadi Array PHP otomatis
    protected $casts = [
        'foto_kegiatan' => 'array',
    ];
}