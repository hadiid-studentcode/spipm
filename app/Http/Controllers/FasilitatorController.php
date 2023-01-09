<?php

namespace App\Http\Controllers;

use App\Models\Fasilitator;
use Illuminate\Http\Request;

class FasilitatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // model fasilitator
        $result = new Fasilitator();
        // query fasilitator
        $fasilitator = $result->fasilitator();
        // query total fasilitator
        $total = $result->total();


        return view('Dashboard.Fasilitator.index')
            ->with('title', 'Fasilitator')
            ->with('active', 'fasilitator')
            ->with('fasilitator', $fasilitator)
            ->with('total', $total);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




        $request->validate([

            'gambarf' => 'mimes:jpg,jpeg,png|max:5000'
        ]);

        if ($request->hasfile('gambarf')) {



            $gambarf = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambarf')->getClientOriginalName());


            $data = [
                'nama' => $request->input('namaf'),
                'nba' => $request->input('nbaf'),
                'wa' => '+62' . $request->input('waf'),
                'jk' => $request->input('jkf'),
                'jabatan' => $request->input('jf'),
                'foto' => $gambarf,
                'fasili_pendamping' => $request->input('pendampingf')
            ];




            // simpan fasilitator
            $result = new Fasilitator();
            $result->simpanFasilitator($data);
            $request->file('gambarf')->move(public_path('Assets/images/fasilitator'), $gambarf);



            return redirect('/fasilitator');
        } elseif ($request->hasfile('gambarf') == false) {
            $data = [
                'nama' => $request->input('namaf'),
                'nba' => $request->input('nbaf'),
                'wa' => '+62' . $request->input('waf'),
                'jk' => $request->input('jkf'),
                'jabatan' => $request->input('jf'),
                'foto' => $request->input('gambarf'),
                'fasili_pendamping' => $request->input('pendampingf')


            ];

            // simpan penitia
            $result = new Fasilitator();
            $result->simpanFasilitator($data);


            return redirect('/fasilitator');
        } else {

            dd('gagal');

            return back()
                ->with('warning', 'Fasilitator Gagal Disimpan');
        }
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

        

        $request->validate([

            'gambarf' => 'mimes:jpg,jpeg,png|max:5000'
        ]);

        if ($request->hasfile('gambarf')) {



            $gambarf = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambarf')->getClientOriginalName());


            $data = [
                'nama' => $request->input('namaf'),
                'nba' => $request->input('nbaf'),
                'wa' => $request->input('waf'),
                'jk' => $request->input('jkf'),
                'jabatan' => $request->input('jf'),
                'foto' => $gambarf,
                'fasili_pendamping' => $request->input('pendampingf')
            ];





            // ubah Fasilitator
            $result = new Fasilitator();
            $result->updateFasilitator($id, $data);
            $request->file('gambarf')->move(public_path('Assets/images/fasilitator'), $gambarf);



            return redirect('/fasilitator');
        } elseif ($request->hasfile('gambarf') == false) {
            $data = [
                'nama' => $request->input('namaf'),
                'nba' => $request->input('nbaf'),
                'wa' => $request->input('waf'),
                'jk' => $request->input('jkf'),
                'jabatan' => $request->input('jf'),
                // 'foto' => $request->input('gambarf'),
                'fasili_pendamping' => $request->input('pendampingf')
            ];



            // update fasilitator
            $result = new Fasilitator();
            $result->updateFasilitator($id, $data);


            return redirect('/fasilitator');
        } else {
            return back()
                ->with('warning', 'Fasilitator Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = decrypt($id);



        $result = new Fasilitator();
     $result->deleteFasilitator($id);





        return redirect('/fasilitator');
    }
}
