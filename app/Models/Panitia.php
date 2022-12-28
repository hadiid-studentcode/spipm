<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panitia extends Model
{
    use HasFactory;
    protected $table = 'panitia';
    protected $fillable = [
        'nama',
        'nba',
        'wa',
        'jk',
        'jabatan',
        'foto'

    ];
    protected $primaryKey = 'id';
}
