<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Peserta extends Model
{
    use HasFactory;
    protected $table = 'peserta';
    protected $fillable = [
        'nama',
        'utusan',
        'wa',
        'jk',
        'foto'

    ];
    protected $primaryKey = 'id';

    public function simpanPeserta($data)
    {
        $result = Peserta::create($data);
        return $result;
    }

    public function queryPeserta()
    {
        $result = Peserta::all();

        return $result;
    }

    public function deletePeserta($id)
    {
        $deleted = Peserta::where('id', $id)->delete();

        return $deleted;
    }

    public function totalPeserta()
    {
        $result = DB::table('peserta')->count();

        return $result;
    }

    public function updatePeserta($id, $data)
    {
        $result = Peserta::where('id', $id)->update($data);

        return $result;
    }
}
