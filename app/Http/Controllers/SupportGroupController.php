<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SupportGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layanan.supportGroup.daftar', [
            'title' => 'Pendaftaran Virtual Support Group',
            'message' => NULL
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'topik' => 'required',
            'diagnosis' => 'required',
            'pernah_gabung' => 'required',
            'pengalaman' => 'required',
            'fasilitator' => 'required',
            'teman_kelompok' => 'required',
            'alasan' => 'required',
            'batasan_pribadi' => 'required',
            'harapan' => 'required',
            'bukti_transfer' => 'required',
        ]);

        $response = Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/layanan/support-group/daftar", [
            'topik' => $request->input('topik'),
            'diagnosis' => $request->input('diagnosis'),
            'pernah_gabung' => $request->input('pernah_gabung'),
            'pengalaman' => $request->input('pengalaman'),
            'fasilitator' => $request->input('fasilitator'),
            'teman_kelompok' => $request->input('teman_kelompok'),
            'alasan' => $request->input('alasan'),
            'batasan_pribadi' => $request->input('batasan_pribadi'),
            'harapan' => $request->input('harapan'),
            'bukti_transfer' => $request->input('bukti_transfer'),
            'user_id' => $request->input('user_id'),
        ]);
        if ($response->status()==200) {
            return redirect('/layanan')->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect('/layanan/support-group/daftar')->with('success', 'Pendaftaran gagal!');
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
