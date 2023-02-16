<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegistrationSupportGroupController extends Controller
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
        $response_screening = Http::get('https://be.ruangberproses.id/api/admin/screening/user/' . session('id'));
        $response_screening = $response_screening->object();
        $screening_data = $response_screening->data;

        $response_profile = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->get('https://be.ruangberproses.id/api/profile');
        $response_profile = $response_profile->object();
        return view('layanan.supportGroup.daftar', [
            'title' => 'Pendaftaran Virtual Support Group',
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

        $response = Http::asForm()->post("https://be.ruangberproses.id/api/layanan/support-group/daftar", [
            'user_id' => $request->input('user_id'),
            'screening_id' => $request->input('screening_id'),
            'preferensi_jk_fasilitator' => $request->input('preferensi_jk_fasilitator'),
            'preferensi_jk_teman' => $request->input('preferensi_jk_teman'),
            'topik' => $request->input('topik'),
            'alasan' => $request->input('alasan'),
            'tujuan' => $request->input('tujuan'),
            'harapan' => $request->input('harapan'),
            'diagnosis' => $request->input('diagnosis'),
            'terlibat_aktif' => $request->input('terlibat_aktif'),
            'mengikuti_full' => $request->input('mengikuti_full'),
            'batasan_pribadi' => $request->input('batasan_pribadi'),
            'mengikuti_aturan' => $request->input('mengikuti_aturan'),
            'consent_sharing' => $request->input('consent_sharing'),
            'consent_screening' => $request->input('consent_screening'),
            'bukti_transfer' => $imagePath,
            'status_pendaftaran' => $request->input('status_pendaftaran')
        ]);
        if ($response->status() == 200) {
            return redirect('/layanan/support-group/daftar/success')->with('success', 'Pendaftaran berhasil!');
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
        $response = Http::get("https://be.ruangberproses.id/api/layanan/support-group/" . $id);
        $response = $response->object();
        return view('layanan.peer.view', [
            'title' => 'Detail Data Support Group',
            'active' => 'supportgroup',
            'reg_sg' => $response->data,
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
        $response = Http::get("https://be.ruangberproses.id/api/layanan/support-group/" . $id);
        $response = $response->object();

        return view('layanan.supportGroup.edit-reg', [
            'title' => 'Edit Data Pendaftaran Support Group',
            'regsg' => $response->data
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

        $response = Http::asForm()->post("https://be.ruangberproses.id/api/admin/layanan/support-group/" . $id . '?_method=PUT', [
            'user_id' => $request->input('user_id'),
            'screening_id' => $request->input('screening_id'),
            'preferensi_jk_fasilitator' => $request->input('preferensi_jk_fasilitator'),
            'preferensi_jk_teman' => $request->input('preferensi_jk_teman'),
            'topik' => $request->input('topik'),
            'alasan' => $request->input('alasan'),
            'tujuan' => $request->input('tujuan'),
            'harapan' => $request->input('harapan'),
            'diagnosis' => $request->input('diagnosis'),
            'terlibat_aktif' => $request->input('terlibat_aktif'),
            'mengikuti_full' => $request->input('mengikuti_full'),
            'batasan_pribadi' => $request->input('batasan_pribadi'),
            'mengikuti_aturan' => $request->input('mengikuti_aturan'),
            'consent_sharing' => $request->input('consent_sharing'),
            'consent_screening' => $request->input('consent_screening'),
            'bukti_transfer' => $request->input('bukti_transfer'),
            'status_pendaftaran' => $request->input('status_pendaftaran')
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
        $response = Http::delete("https://be.ruangberproses.id/api/admin/layanan/support-group/" . $id);

        if ($response->status() == 200) {
            return redirect('/admin')->with('success', 'Support Group data has been deleted!');
        }
    }

    public function regSuccess()
    {
        return view('layanan.registration-success', [
            'message' => NULL,
        ]);
    }
}
