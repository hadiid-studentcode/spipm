<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


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

    public function BankMateri()
    {
        return $this->belongsTo(BankMateri::class, 'idMateri');
    }


    public function DataMateri()
    {

        $result = Materi::all();

        return $result;
    }

    public function simpanMateri($data)
    {
        $result = Materi::create($data);
        return $result;
    }

    public function jumlahMateri()
    {
        $result = DB::table('materi')->count();

        return $result;
    }

    public function PenanggungJawab()
    {
        $result =  DB::table('fasilitator')
        ->where('jabatan', '<>', 'Fasilitator Pendamping')
        ->where('jabatan', '<>', 'Fasilitator Pemateri')
        ->get();

        return $result;
    }

    public function Materi()
    {
        $result =  DB::table('materi')
        ->select('materi.id', 'materi.idMateri', 'bank_materi.materi',)
        ->join('bank_materi', 'materi.idMateri', '=', 'bank_materi.id')


        ->where('materi.idMateri', '<>', 10)
            ->where('idMateri', '<>', 11)
            ->where('idMateri', '<>', 12)
            ->where('idMateri', '<>', 13)
            ->where('idMateri', '<>', 14)
            ->where('idMateri', '<>', 15)
            ->where('idMateri', '<>', 16)
            ->where('idMateri', '<>', 17)
            ->where('idMateri', '<>', 18)
            ->where('idMateri', '<>', 19)
            ->where('idMateri', '<>', 20)
            ->where('idMateri', '<>', 21)
            ->where('idMateri', '<>', 22)
            ->where('idMateri', '<>', 23)
            ->where('idMateri', '<>', 24)

            ->get();

        return $result;
    }

    public function materiprepostTest($idMateri)
    {

        $result = DB::table('materi')
        ->where('id', '=', $idMateri)

            ->get();

        return $result;
    }

    public function MateriTerpilih($id)
    {
        $result = DB::table('materi')
        ->select('materi.*', 'bank_materi.materi')
        ->join('bank_materi', 'materi.idMateri', '=', 'bank_materi.id')

        ->where('materi.id', '=', $id)

            ->first();

        return $result;
    }
}
