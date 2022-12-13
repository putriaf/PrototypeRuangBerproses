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
        return view('layanan.professionalCounseling.index', [
            'title' => 'Professional Counseling',
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
        $validatedData = $request->validate([
            'counselor_id' => 'required',
            'waktu' => '',
            'tanggal' => '',
            'biaya' => 'required'
        ]);

        $response = Http::asForm()->post("https://ruangberproses-be.site/api/admin/layanan/procounseling-list/tambah", [
            'counselor_id' => $request->input('counselor_id'),
            'waktu' => $request->input('waktu'),
            'tanggal' => $request->input('tanggal'),
            'biaya' => $request->input('biaya')
        ]);
        if ($response->status() == 200) {
            return redirect('/admin')->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect('/admin')->with('success', 'Pendaftaran gagal!');
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
        $response = Http::get("https://ruangberproses-be.site/api/layanan/professional-counseling/" . $id);
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
        $response = Http::get("https://ruangberproses-be.site/api/layanan/professional-counseling/" . $id);
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
            'nama_konselor' => 'required',
            'waktu' => 'required',
            'biaya' => 'required'
        ];
        $validatedData = $request->validate($rules);
        Http::asForm()->post("https://ruangberproses-be.site/api/admin/layanan/procounseling-list/" . $id . '?_method=PUT', [
            'nama_konselor' => $request->input('nama_konselor'),
            'waktu' => $request->input('waktu'),
            'biaya' => $request->input('biaya')
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
        $response = Http::delete("https://ruangberproses-be.site/api/admin/layanan/procounseling-list/" . $id);

        if ($response->status() == 200) {
            return redirect('/admin')->with('success', 'Professional Counseling data has been deleted!');
        }
    }
}