<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama_masyarakat',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat_masyarakat',
        'foto_profile',
        'alamat_masyarakat',
        'tlpn_masyarakat',
        'email',
        'password',
    ];

    protected $table = 'masyarakat';


    //Relasi ke tabel masyarakat
    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'nik', 'nik');
    }
}
