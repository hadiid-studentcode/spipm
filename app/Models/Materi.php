<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    protected $fillable = [
        'tanggal',
        'waktu_dari',
        'waktu_sampai',
        'id_silabus',
        'id_fasilitator',
        'status'

    ];
    protected $primaryKey = 'id';
}
