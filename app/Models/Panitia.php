<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


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

    public function simpanPanitia($data){

        $result = Panitia::create($data);
        return $result;

    }

    public function panitia(){
        $result = Panitia::all();

        return $result;
    }

    public function deletePanitia($id){
        $deleted = Panitia::where('id', $id)->delete();

        return $deleted;
    }
    public function total(){
        $result = DB::table('panitia')->count();

        return $result;
    }
    public function updatePanitia($id , $data){
        $result = Panitia::where('id',$id)->update($data);

        return $result;
    }
}
