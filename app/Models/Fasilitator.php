<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitator extends Model
{
    use HasFactory;
    protected $table = 'fasilitator';
    protected $fillable = [

        'nama',
        'nba',
        'wa',
        'jk',
        'jabatan',
        'foto',
        'fasili_pendamping'

    ];
    protected $primaryKey = 'id';
}
