<?php

namespace App\Models;

use App\Models\Pegawai;
use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanggapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tanggapan',
        'id_pengaduan',
        'tanggal_tanggapan',
        'id_pengaduan',
        'id_pegawai',
    ];

    protected $table = 'tanggapan';

    //Relasi nilai balik
    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'id_pengaduan', 'id_pengaduan');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegaawai');
    }
}
