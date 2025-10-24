<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilUjian extends Model
{
    use HasFactory;

    protected $table = 'hasil_ujians';
    protected $primaryKey = 'idHasil';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['idHasil', 'idUjian', 'idSiswa', 'skorAkhir', 'tanggalUjian'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'idSiswa', 'idSiswa');
    }

    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'idUjian', 'idUjian');
    }
}
