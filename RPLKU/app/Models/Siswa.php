<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $primaryKey = 'idSiswa';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['idSiswa', 'namaSiswa', 'nomorUjian', 'idKelas'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'idKelas', 'idKelas');
    }

    public function hasilUjians()
    {
        return $this->hasMany(HasilUjian::class, 'idSiswa', 'idSiswa');
    }
}
