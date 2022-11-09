<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PsytalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('program.psytalk.index', [
            'title' => 'Psychology Talk',
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
        return view('program.psytalk.daftar', [
            'title' => 'Pendaftaran Psytalk',
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
            'topik' => 'required',
            'pembicara' => 'required',
            'waktu' => 'required',
            'biaya' => 'required'
        ]);

        $response = Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/program/psytalk/daftar", [
            'topik' => $request->input('topik'),
            'pembicara' => $request->input('pembicara'),
            'waktu' => $request->input('waktu'),
            'biaya' => $request->input('biaya'),
        ]);
        if ($response->status() == 200) {
            return redirect('/program/psytalk')->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect('/program/psytalk/daftar')->with('success', 'Pendaftaran gagal!');
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
        $response = Http::get("https://ruangberproses-be.herokuapp.com/api/program/psytalk/" . $id);
        $response = $response->object();
        return view('program.psytalk.view', [
            'title' => 'Detail Data Psytalk',
            'active' => 'psytalk',
            'psytalk' => $response->data,
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
        $response = Http::get("https://ruangberproses-be.herokuapp.com/api/program/psytalk/" . $id);
        $response = $response->object();

        return view('program.psytalk.edit', [
            'title' => 'Edit Data Psytalk',
            'psytalk' => $response->data
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
            'pilihan_webinar' => 'required',
            'bukti_transfer' => 'required',
        ];
        $validatedData["user_id"] = session()->get('id');
        $validatedData = $request->validate($rules);

        Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/program/psytalk/" . $id . '?_method=PUT', [
            'pilihan_webinar' => $request->input('pilihan_webinar'),
            'bukti_transfer' => $request->input('bukti_transfer'),
        ]);

        return redirect('/program');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::delete("https://ruangberproses-be.herokuapp.com/api/program/psytalk/" . $id);

        if ($response->status() == 200) {
            return redirect('/program')->with('success', 'Psytalk data has been deleted!');
        }
    }
}