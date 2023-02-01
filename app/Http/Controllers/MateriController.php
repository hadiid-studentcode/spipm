<?php

namespace App\Http\Controllers;

use App\Models\Fasilitator;
use App\Models\Materi;
use App\Models\Silabus;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = new Silabus();
        $silabus = $data->Silabus();



        $result = new Fasilitator();
        $fasilitator_pemateri = $result->FasilitatorPemateri();
        $fasilitator_pendamping = $result->FasilitatorPendamping();


        $result = new Materi();
        $materi = $result->DataMateri();
        $jumlah = $result->jumlahMateri();
        $penanggungjawab = $result->PenanggungJawab();








        return view('Dashboard.Materi.index')
            ->with('title', 'Materi')
            ->with('active', 'materi')
            ->with('materi', $materi)
            ->with('pemateri', $fasilitator_pemateri)
            ->with('pendamping', $fasilitator_pendamping)
            ->with('jumlah', $jumlah)
            ->with('silabus', $silabus)
            ->with('pj', $penanggungjawab);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Silabus();
        $silabus = $data->Silabus();





        return view('Dashboard.Materi.create')
        ->with('silabus', $silabus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
