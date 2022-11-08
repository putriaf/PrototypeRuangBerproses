<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class RegistrationProCounselingController extends Controller
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
        $response = Http::get('https://ruangberproses-be.herokuapp.com/api/admin/layanan/procounseling-list');
        $response = $response->object();
        return view('layanan.professionalCounseling.daftar', [
            'title' => 'Pendaftaran Virtual Professional Counseling',
            'message' => NULL,
            'procounselings' => $response->data
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
            'procounseling_id' => 'required',
            'preferensi_jk_konselor' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
            'bukti_transfer' => 'required',
            'status_pendaftaran' => 'required'
        ]);

        $uploadPath = public_path('storage/bukti-transfer');
        if ($request->hasFile('bukti_transfer')) {
            $file = $request->file('bukti_transfer');
            $uniqueFileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $uniqueFileName);
            $imagePath = 'bukti-transfer/' . $uniqueFileName;
        } else {
            $imagePath = NULL;
        }

        $response = Http::get('https://ruangberproses-be.herokuapp.com/api/admin/screening/user/' . session('id'));
        $response = $response->object();
        $screening = $response->data;

        $response = Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/daftar", [
            'user_id' => $request->input('user_id'),
            'screening_id' => $screening->id,
            'procounseling_id' => $request->input('procounseling_id'),
            'preferensi_jk_konselor' => $request->input('preferensi_jk_konselor'),
            'consent_sharing' => $request->input('consent_sharing'),
            'consent_screening' => $request->input('consent_screening'),
            'bukti_transfer' => $imagePath,
            'status_pendaftaran' => $request->input('status_pendaftaran'),
            'perubahan_fisik' => '0',
            'perubahan_emosi' => '0',
            'riwayat_kecemasan' => '0',
            'penyakit_kronis' => '0',
            'konsumsi_alkohol' => '0',
            'konsumsi_obat' => '0',
            'pola_tidur' => '0',
            'pola_makan' => '0',
            'kondisi_keuangan' => '0',
            'ringkasan_masalah' => '0',
            'pernah_konseling' => '0',
            'menyakiti_diri' => '0',
            'mengakhiri_hidup' => '0',
        ]);
        if ($response->status() == 200) {
            return redirect('/layanan/professional-counseling')->with('success', 'Pendaftaran berhasil!');
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
        $response = Http::get("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/" . $id);
        $response = $response->object();
        return view('layanan.professionalCounseling.view', [
            'title' => 'Detail Data Pendaftaran Professional Counseling',
            'active' => 'professionalcounseling',
            'regprofessionalcounseling' => $response->data,
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
        $response = Http::get("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/" . $id);
        $response = $response->object();

        return view('layanan.professionalCounseling.edit', [
            'title' => 'Edit Data Pendaftaran Professional Counseling',
            'professionalcounseling' => $response->data
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
            'user_id' => 'required',
            'procounseling_id' => 'required',
            'preferensi_jk_konselor' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
            'bukti_transfer' => '',
            'status_pendaftaran' => 'required'
        ];
        $validatedData["user_id"] = session()->get('id');
        $validatedData = $request->validate($rules);

        Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/" . $id . '?_method=PUT', [
            'user_id' => $request->input('user_id'),
            'procounseling_id' => $request->input('procounseling_id'),
            'preferensi_jk_konselor' => $request->input('preferensi_jk_konselor'),
            'consent_sharing' => $request->input('consent_sharing'),
            'consent_screening' => $request->input('consent_screening'),
            'bukti_transfer' => $request->input('bukti_transfer'),
            'status_pendaftaran' => $request->input('status_pendaftaran'),
        ]);

        return redirect('/layanan/professional-counseling');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::delete("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/" . $id);

        if ($response->status() == 200) {
            return redirect('/layanan/professional-counseling')->with('success', 'Professional Counseling data has been deleted!');
        }
    }
}