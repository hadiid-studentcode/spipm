<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasilbelajar extends Model
{
    use HasFactory;
    protected $table = 'hasilbelajar';
    protected $fillable = [
        'id_pemahaman',
        'total_nilai'

    ];
    protected $primaryKey = 'id';
}
