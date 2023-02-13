<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegistrationPeerCounselingController extends Controller
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
        $response_screening = Http::get('https://ruangberproses-be.site/api/admin/screening/user/' . session('id'));
        $response_screening = $response_screening->object();
        $screening_data = $response_screening->data;

        $response_profile = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->get('https://ruangberproses-be.site/api/profile');
        $response_profile = $response_profile->object();
        return view('layanan.peerCounseling.daftar', [
            'title' => 'Pendaftaran Virtual Peer Counseling',
            'message' => NULL,
            'screening' => $screening_data,
            'profilUser' => $response_profile->profile
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
        $uploadPath = public_path('storage/bukti-transfer');
        if ($request->hasFile('bukti_transfer')) {
            $file = $request->file('bukti_transfer');
            $uniqueFileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $uniqueFileName);
            $imagePath = 'bukti-transfer/' . $uniqueFileName;
        } else {
            $imagePath = NULL;
        }

        $response = Http::asForm()->post("https://ruangberproses-be.site/api/layanan/peer-counseling/daftar", [
            'user_id' => $request->input('user_id'),
            'screening_id' => $request->input('screening_id'),
            'pref_jk_konselor' => $request->input('pref_jk_konselor'),
            'latar_belakang' => $request->input('latar_belakang'),
            'tujuan' => $request->input('tujuan'),
            'keluhan' => $request->input('keluhan'),
            'consent_sharing' => $request->input('consent_sharing'),
            'consent_screening' => $request->input('consent_screening'),
            'bukti_transfer' => $imagePath,
            'status_pendaftaran' => $request->input('status_pendaftaran')
        ]);
        // dd($response->body());
        if ($response->status() == 200) {
            return redirect('/layanan/professional-counseling/daftar/success')->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect('/layanan/professional-counseling/daftar')->with('success', 'Pendaftaran gagal!');
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
        $response = Http::get("https://ruangberproses-be.site/api/layanan/peer-counseling/" . $id);
        $response = $response->object();
        return view('layanan.peer.view', [
            'title' => 'Detail Data Peer Professional Counseling',
            'active' => 'peercounseling',
            'regpeercounseling' => $response->data,
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
        $response = Http::get("https://ruangberproses-be.site/api/layanan/peer-counseling/" . $id);
        $response = $response->object();

        return view('layanan.peer.edit-reg', [
            'title' => 'Edit Data Pendaftaran Peer Counseling',
            'regpeerc' => $response->data
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
            'status_pendaftaran' => 'required',
        ];
        $validatedData["user_id"] = session()->get('id');
        $validatedData = $request->validate($rules);

        $response = Http::asForm()->post("https://ruangberproses-be.site/api/admin/layanan/professional-counseling/" . $id . '?_method=PUT', [
            'user_id' => $request->input('user_id'),
            'procounseling_id' => $request->input('procounseling_id'),
            'preferensi_jk_konselor' => $request->input('preferensi_jk_konselor'),
            'consent_sharing' => $request->input('consent_sharing'),
            'consent_screening' => $request->input('consent_screening'),
            'bukti_transfer' => $request->input('bukti_transfer'),
            'status_pendaftaran' => $request->input('status_pendaftaran'),
            'waktu_fix' => $request->input('waktu_fix')
        ]);
        return redirect('/admin');
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

    public function regSuccess()
    {
        return view('layanan.registration-success', [
            'message' => NULL,
        ]);
    }
}
