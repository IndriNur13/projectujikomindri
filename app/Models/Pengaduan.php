<?php

namespace App\Models;

use App\Models\Masyarakat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pengaduan',
        'nik',
        'tanggal_pengaduan',
        'judul_pengaduan',
        'isi_pengaduan',
        'foto pengaduan',
        'status_pengaduan',
    ];

    protected $table = 'pengaduan';

    //Relasi nilai balik
    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'nik', 'nik');
    }
}
