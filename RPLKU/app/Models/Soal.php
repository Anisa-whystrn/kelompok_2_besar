<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $table = 'soals';
    protected $primaryKey = 'idSoal';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idSoal', 'teksSoal', 'opsiA', 'opsiB', 'opsiC', 'opsiD',
        'jawabanBenar', 'skor', 'kodeGuru'
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'kodeGuru', 'kodeGuru');
    }

    public function ujians()
    {
        return $this->belongsToMany(Ujian::class, 'detail_ujians', 'idSoal', 'idUjian');
    }
}
