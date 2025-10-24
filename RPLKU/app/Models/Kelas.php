<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'idKelas';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['idKelas', 'namaKelas', 'deskripsi', 'kodeGuru'];

    // Relasi: Kelas milik satu Guru
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'kodeGuru', 'kodeGuru');
    }

    // Relasi: 1 Kelas punya banyak Ujian
    public function ujians()
    {
        return $this->hasMany(Ujian::class, 'idKelas', 'idKelas');
    }

    // Relasi: 1 Kelas punya banyak Siswa
    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'idKelas', 'idKelas');
    }
}
