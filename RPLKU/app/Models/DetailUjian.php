<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUjian extends Model
{
    use HasFactory;

    protected $table = 'detail_ujians';
    protected $primaryKey = 'idDetail';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['idDetail', 'idUjian', 'idSoal'];

    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'idUjian', 'idUjian');
    }

    public function soal()
    {
        return $this->belongsTo(Soal::class, 'idSoal', 'idSoal');
    }
}
