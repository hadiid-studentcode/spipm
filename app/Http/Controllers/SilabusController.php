<?php

namespace App\Http\Controllers;

use App\Models\Silabus;
use Illuminate\Http\Request;

class SilabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('Dashboard.Silabus.index')
            ->with('title', 'silabus')
            ->with('jenisSilabus','');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Silabus.create')
            ->with('title', 'create silabus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $silabus = $request->input('jenisslb');
        $nm_materi = $request->input('nmmateri');
        $standar_kompetensi = $request->input('standkomp');
        $kompetensi_dasar = $request->input('kompdasar');
        $indikator = $request->input('idkt');
        $materi_pokok = $request->input('mpokok');

        $strategi_pembelajaran =
            $request->input('stp1') . ',' .
            $request->input('stp2') . ',' .
            $request->input('stp3') . ',' .
            $request->input('stp4') . ',' .
            $request->input('stp5') . ',' .
            $request->input('stp6') . ',' .
            $request->input('stp7') . ',' .
            $request->input('stp8') . ',' .
            $request->input('stp9');

        $sks = $request->input('sks');
        $referensi = $request->input('referenc');
        $penilaian = $request->input('nilai');


        $data = [
            'jenis' => $silabus,
            'standar_kompetensi' => $standar_kompetensi,
            'kompetensi_dasar' => $kompetensi_dasar,
            'indikator' => $indikator,
            'nm_materi' => $nm_materi,
            'materi_pokok' => $materi_pokok,
            'strategi_pembelajaran' => $strategi_pembelajaran,
            'sks' => $sks,
            'referensi_acuan' => $referensi,
            'penilaian' => $penilaian
        ];

        // simpan silabus
        $result = new Silabus();
        $result->simpanSilabus($data);

        return redirect('/silabus/create');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request ,$jenis)
    {
       $jenis = $request->input('jenis');

           // query data silabus
        $result = new Silabus();
        $silabus = $result->Silabus($jenis);

        return view('Dashboard.Silabus.index')
        ->with('title', 'silabus')
        ->with('jenisSilabus', $jenis)
        ->with('silabus',$silabus);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
