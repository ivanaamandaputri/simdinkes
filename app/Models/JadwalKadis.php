<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKadis extends Model
{
    use HasFactory;
    protected $table = 'jadwal_kadis'; // Nama tabel sesuai migrasi
    protected $fillable = ['tanggal', 'keterangan', 'waktu_mulai','waktu_selesai', 'lokasi'];
}
