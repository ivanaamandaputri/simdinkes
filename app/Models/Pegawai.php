<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 't_pegawai';

    protected $fillable = [
        'nama_lengkap',
        'nip',
        'pegawai_id', // tambahkan kolom pegawai_id
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'pegawai_id');
    }
}
