<?php

namespace App\Http\Controllers;

use App\Models\Panitia;
use Illuminate\Http\Request;

class KepanitiaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // model panitia
        $result = new Panitia();
        // query panitia
        $panitia = $result->panitia();
        // query total panitia
        $total = $result->total();


        return view('Dashboard.Kepanitiaan.index')
            ->with('title', 'Kepanitiaan')
            ->with('active', 'kepanitiaan')
            ->with('panitia', $panitia)
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

            'gambarp' => 'mimes:jpg,jpeg,png|max:5000'
        ]);

        if ($request->hasfile('gambarp')) {



            $gambarp = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambarp')->getClientOriginalName());


            $data = [
                'nama' => $request->input('namap'),
                'nba' => $request->input('nbap'),
                'wa' => '+62' . $request->input('wap'),
                'jk' => $request->input('jkp'),
                'jabatan' => $request->input('jp'),
                'foto' => $gambarp
            ];



            // simpan panitia
            $result = new Panitia();
            $result->simpanPanitia($data);
            $request->file('gambarp')->move(public_path('Assets/images/panitia'), $gambarp);



            return redirect('/kepanitiaan');
        } elseif ($request->hasfile('gambarp') == false) {
            $data = [
                'nama' => $request->input('namap'),
                'nba' => $request->input('nbap'),
                'wa' => '+62' . $request->input('wap'),
                'jk' => $request->input('jkp'),
                'jabatan' => $request->input('jp'),
                'foto' => $request->input('gambarp')
            ];

            // simpan penitia
            $result = new Panitia();
            $result->simpanPanitia($data);


            return redirect('/kepanitiaan');
        } else {
            return back()
                ->with('warning', 'Panitia Gagal Disimpan');
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

            'gambarp' => 'mimes:jpg,jpeg,png|max:5000'
        ]);

        if ($request->hasfile('gambarp')) {



            $gambarp = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambarp')->getClientOriginalName());


            $data = [
                'nama' => $request->input('namap'),
                'nba' => $request->input('nbap'),
                'wa' => $request->input('wap'),
                'jk' => $request->input('jkp'),
                'jabatan' => $request->input('jp'),
                'foto' => $gambarp
            ];





            // ubah Panitia
            $result = new Panitia();
            $result->updatePanitia($id,$data);
            $request->file('gambarp')->move(public_path('Assets/images/panitia'), $gambarp);



            return redirect('/kepanitiaan');
        } elseif ($request->hasfile('gambarp') == false) {
            $data = [
                'nama' => $request->input('namap'),
                'nba' => $request->input('nbap'),
                'wa' => $request->input('wap'),
                'jk' => $request->input('jkp'),
                'jabatan' => $request->input('jp'),
                'foto' => $request->input('gambarp')
            ];



            // update panitia
            $result = new Panitia();
            $result->updatePanitia($id, $data);


            return redirect('/kepanitiaan');
        } else {
            return back()
                ->with('warning', 'Panitia Gagal Diubah');
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



        $result = new Panitia();
        $test =  $result->deletePanitia($id);





        return redirect('/kepanitiaan');
    }
}
