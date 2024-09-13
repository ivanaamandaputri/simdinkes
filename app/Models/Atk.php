<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atk extends Model
{
    use HasFactory;
    protected $table = 't_atk'; // Nama tabel sesuai migrasi
    protected $fillable = ['tanggal', 'login_id', 'barang_id', 'jumlah_barang'];

    // Relasi ke t_login (siapa yang mengajukan permintaan ATK)
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke t_barang (barang yang diminta)
    public function t_barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
