<?php

namespace App\Models;

use App\Http\Controllers\KendaraanController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bbm extends Model
{
    use HasFactory;

    protected $table = 't_bbm';

    protected $fillable = [
        'tanggal',
        'nama',
        'nopol',
        'nama_kendaraan',
        'nominal',
    ];

    // Definisikan relasi dengan model Pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nama');
    }

    // Definisikan relasi dengan model Kendaraan
    public function kendaraan()
    {
        return $this->belongsTo(KendaraanController::class, 'nopol');
    }
}
