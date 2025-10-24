<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    protected $table = 'ujians';
    protected $primaryKey = 'idUjian';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idUjian', 'namaUjian', 'waktuMulai', 'durasi', 'passwordUjian',
        'linkUjian', 'idKelas', 'kodeGuru'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'idKelas', 'idKelas');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'kodeGuru', 'kodeGuru');
    }

    public function soals()
    {
        return $this->belongsToMany(Soal::class, 'detail_ujians', 'idUjian', 'idSoal');
    }

    public function hasilUjians()
    {
        return $this->hasMany(HasilUjian::class, 'idUjian', 'idUjian');
    }
}
