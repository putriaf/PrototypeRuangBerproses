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
        return view('layanan.supportGroup.index', [
            'title' => 'Support Group',
            'message' => NULL
        ]);
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
        if ($response->status() == 200) {
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
        $response = Http::get("https://ruangberproses-be.herokuapp.com/api/layanan/support-group/" . $id);
        $response = $response->object();
        return view('layanan.supportGroup.view', [
            'title' => 'Detail Data Support Group',
            'active' => 'supportgroup',
            'supportgroup' => $response->data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = Http::get("https://ruangberproses-be.herokuapp.com/api/layanan/support-group/" . $id);
        $response = $response->object();

        return view('layanan.supportGroup.edit', [
            'title' => 'Edit Data Support Group',
            'supportgroup' => $response->data
        ]);
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
        $rules = [
            'pengalaman' => 'required',
            'fasilitator' => 'required',
        ];
        $validatedData["user_id"] = session()->get('id');
        $validatedData = $request->validate($rules);

        Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/layanan/support-group/" . $id . '?_method=PUT', [
            'pengalaman' => $request->input('pengalaman'),
            'fasilitator' => $request->input('fasilitator'),
        ]);

        return redirect('/layanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::delete("https://ruangberproses-be.herokuapp.com/api/layanan/support-group/" . $id);

        if ($response->status() == 200) {
            return redirect('/layanan')->with('success', 'Support Group data has been deleted!');
        }
    }
}