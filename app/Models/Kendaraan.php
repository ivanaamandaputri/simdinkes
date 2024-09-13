<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 't_kendaraan'; // Nama tabel sesuai migrasi
    protected $fillable = ['nopol', 'nama_kendaraan', 'jenis', 'tahun', 'warna', 'no_rangka', 'no_mesin'];

    // Relasi satu ke banyak dengan t_bbm
    public function t_bbm()
    {
        return $this->hasMany(Bbm::class);
    }
}
