<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfessionalCounselingController extends Controller
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
        return view('layanan.professionalCounseling.daftar', [
            'title' => 'Pendaftaran Virtual Professional Counseling',
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
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'domisili' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
            'bukti_transfer' => 'required'
        ]);

        $response = Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/daftar", [
            'user_id' => $request->input('user_id'),
            'status' => $request->input('status'),
            'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
            'pekerjaan' => $request->input('pekerjaan'),
            'domisili' => $request->input('domisili'),
            'consent_sharing' => $request->input('consent_sharing'),
            'consent_screening' => $request->input('consent_screening'),
            'bukti_transfer' => $request->input('bukti_transfer'),
        ]);
        if ($response->status()==200) {
            return redirect('/layanan')->with('success', 'Pendaftaran berhasil!');
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
            'title' => 'Detail Data Professional Counseling',
            'active' => 'professionalcounseling',
            'professionalcounseling' => $response->data,
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
            'title' => 'Edit Data Professional Counseling',
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
            'status' => 'required',
            'bukti_transfer' => 'required',
        ];
        $validatedData["user_id"] = session()->get('id');
        $validatedData = $request->validate($rules);

        Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/" . $id . '?_method=PUT', [
            'status' => $request->input('status'),
            'bukti_transfer' => $request->input('bukti_transfer'),
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
        $response = Http::delete("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/" . $id);

        if ($response->status()==200) {
            return redirect('/layanan')->with('success', 'Professional Counseling data has been deleted!');
        }
    }
}
