<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $primaryKey = 'idGuru';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['namaGuru', 'kodeGuru'];

    // Relasi: 1 Guru punya banyak Kelas
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'kodeGuru', 'kodeGuru');
    }

    // Relasi: 1 Guru punya banyak Soal
    public function soals()
    {
        return $this->hasMany(Soal::class, 'kodeGuru', 'kodeGuru');
    }

    // Relasi: 1 Guru punya banyak Ujian
    public function ujians()
    {
        return $this->hasMany(Ujian::class, 'kodeGuru', 'kodeGuru');
    }
}
