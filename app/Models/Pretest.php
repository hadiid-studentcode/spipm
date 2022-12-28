<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pretest extends Model
{
    use HasFactory;
    protected $table = 'pretest';
    protected $fillable = [
        'id_materi',
        'soal',
        'jawaban',
        'nilai'

    ];
    protected $primaryKey = 'id';
}
