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
        'kompetensi_dasar',
        'indikator',
        'nm_materi',
        'materi_pokok',
        'strategi_pembelajaran',
        'sks',
        'referensi_acuan',
        'penilaian'

    ];
    protected $primaryKey = 'id';

    public function simpanSilabus($data)
    {
        $result = Silabus::create($data);
        return $result;
    }

    public function Silabus()
    {
        $result = Silabus::all();

        return $result;
    }
}
