<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemahaman extends Model
{
    use HasFactory;
    protected $table = 'pemahaman';
    protected $fillable = [
        'id_peserta',
        'id_materi',
        'id_pretest',
        'id_posttest'

    ];
    protected $primaryKey = 'id';
}
