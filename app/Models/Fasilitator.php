<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


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

    public function simpanFasilitator($data)
    {

        $result = Fasilitator::create($data);
        return $result;
    }

    public function fasilitator()
    {
        $result = Fasilitator::all();

        return $result;
    }

    public function deleteFasilitator($id)
    {
        $deleted = Fasilitator::where('id', $id)->delete();

        return $deleted;
    }
    public function total()
    {
        $result = DB::table('fasilitator')->count();

        return $result;
    }
    public function updateFasilitator($id, $data)
    {
        $result = Fasilitator::where('id', $id)->update($data);

        return $result;
    }
    public function FasilitatorPemateri()
    {
        $result = DB::table('fasilitator')
        ->where('jabatan', '=', 'Fasilitator Pemateri')
        ->get();

        return $result;
    }

    public function FasilitatorPendamping()
    {
        $result = DB::table('fasilitator')
        ->where('jabatan', '=', 'Fasilitator Pendamping')
        ->get();

        return $result;
    }
    public function fasilitatorTerpilih($id)
    {
        $result = DB::table('fasilitator')
        ->select('id', 'nama', 'jabatan')

        ->where('id', '=', $id)
            ->where('jabatan', '=', 'Fasilitator Pemateri')

            ->first();

        return $result;
    }
}
