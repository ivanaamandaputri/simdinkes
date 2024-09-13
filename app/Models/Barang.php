<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 't_barang'; // Nama tabel sesuai migrasi
    protected $fillable = ['nama_barang', 'stok'];

    // Relasi satu ke banyak dengan t_atk
    public function t_atk()
    {
        return $this->hasMany(Atk::class);
    }
}
