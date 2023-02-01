<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $fillable = [
        'nama',
        'tema',
        'dari',
        'sampai',
        'deksripsi',
        'tujuan',
        'informasi',
        'tempat',
        'logo'

    ];
    protected $primaryKey = 'id';

    public function simpanKegiatan($data)
    {
        $result = Kegiatan::create($data);
        return $result;
    }

    public function queryKegiatan()
    {
        $result = Kegiatan::all();

        return $result;
    }

    public function detailKegiatan($nama)
    {
        $result = Kegiatan::where('nama', $nama)->first();

        return $result;
    }
}
