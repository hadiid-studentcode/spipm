<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silabus extends Model
{
    use HasFactory;
    protected $table = 'silabus';
    protected $fillable = [

        'jenis',
        'standar_kompetensi',
        'indikator',
        'nm_materi',
        'deskripsi',
        'strategi_pembelajaran',
        'sks',
        'referensi_acuan',
        'penilian'

    ];
    protected $primaryKey = 'id';
}
