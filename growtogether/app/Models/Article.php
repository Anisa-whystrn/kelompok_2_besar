<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_image_url'  => 'assets/images/enjoying-pleasant-walk-with-granny.jpg',
        'edukasi_content_html ' ,
        'gambar_edukasi_url' => 'assets/images/WhatsApp Image 2025-10-21 at 14.32.03_9efaca73.jpg'
    ];
}