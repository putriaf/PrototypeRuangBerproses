<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeerCounselingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layanan.peerCounseling.index', [
            'title' => 'Peer Counseling',
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
        return view('layanan.peerCounseling.daftar', [
            'title' => 'Pendaftaran Virtual Peer Counseling',
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
            'status' => 'required',
            'domisili' => 'required',
            'pernah_gabung' => 'required',
            'konselor' => 'required',
            'pengalaman' => 'required',
            'keluhan' => 'required',
            'latar_belakang' => 'required',
            'tujuan' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
        ]);

        $response = Http::asForm()->post("https://be.ruangberproses.id/api/layanan/peer-counseling/daftar", [
            'status' => $request->input('status'),
            'domisili' => $request->input('domisili'),
            'pernah_gabung' => $request->input('pernah_gabung'),
            'pengalaman' => $request->input('pengalaman'),
            'konselor' => $request->input('konselor'),
            'keluhan' => $request->input('keluhan'),
            'latar_belakang' => $request->input('latar_belakang'),
            'tujuan' => $request->input('tujuan'),
            'consent_sharing' => $request->input('consent_sharing'),
            'consent_screening' => $request->input('consent_screening'),
            'user_id' => $request->input('user_id'),
        ]);
        if ($response->status() == 200) {
            return redirect('/layanan')->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect('/layanan/peer-counseling/daftar')->with('success', 'Pendaftaran gagal!');
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
        $response = Http::get("https://be.ruangberproses.id/api/layanan/peer-counseling/" . $id);
        $response = $response->object();
        return view('layanan.peerCounseling.view', [
            'title' => 'Detail Data Peer Counseling',
            'active' => 'peercounseling',
            'peercounseling' => $response->data,
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
        $response = Http::get("https://be.ruangberproses.id/api/layanan/peer-counseling/" . $id);
        $response = $response->object();

        return view('layanan.peerCounseling.edit', [
            'title' => 'Edit Data Peer Counseling',
            'peercounseling' => $response->data
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
            'konselor' => 'required',
        ];
        $validatedData["user_id"] = session()->get('id');
        $validatedData = $request->validate($rules);

        Http::asForm()->post("https://be.ruangberproses.id/api/layanan/peer-counseling/" . $id . '?_method=PUT', [
            'pengalaman' => $request->input('pengalaman'),
            'konselor' => $request->input('konselor'),
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
        $response = Http::delete("https://be.ruangberproses.id/api/layanan/peer-counseling/" . $id);

        if ($response->status() == 200) {
            return redirect('/layanan')->with('success', 'Peer Counseling data has been deleted!');
        }
    }
}
