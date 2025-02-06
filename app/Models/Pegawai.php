<?php

namespace App\Models;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pegawai',
        'nama_pegawai',
        'tlpn_pegawai',
        'email',
        'password',
        'level',
    ];

    protected $table = 'pegawai';
    public function tanggapan()
    {
        return $this->belongsTo(Tanggapan::class, 'id_pegawai', 'id_pegawai');
    }
}
