<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegistrationPsytalkController extends Controller
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
    public function create($id)
    {
        $response = Http::get('https://ruangberproses-be.site/api/admin/program/psytalk-list');
        $response = $response->object();
        $response_profile = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->get('https://ruangberproses-be.site/api/profile');
        $response_profile = $response_profile->object();
        return view('program.psytalk.daftar', [
            'title' => 'Pendaftaran Psytalk',
            'message' => NULL,
            'psytalks' => $response->data,
            'psytalk_id' => $id,
            'profilUser' => $response_profile->profile
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $id = $id;
        $validatedData = $request->validate([
            'user_id' => 'required',
            'psytalk_id' => 'required',
            'alasan' => 'required',
            'asal_info' => 'required',
            'bukti_transfer' => '',
            'status_pendaftaran' => 'required',
        ]);

        $uploadPath = public_path('storage/bukti-transfer/psytalk');
        if ($request->hasFile('bukti_transfer')) {
            $file = $request->file('bukti_transfer');
            $uniqueFileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $uniqueFileName);
            $imagePath = 'bukti-transfer/psytalk' . $uniqueFileName;
        } else {
            $imagePath = NULL;
        }

        $response = Http::asForm()->post("https://ruangberproses-be.site/api/program/psytalk/daftar", [
            'user_id' => $request->input('user_id'),
            'psytalk_id' => $request->input('psytalk_id'),
            'alasan' => $request->input('alasan'),
            'asal_info' => $request->input('asal_info'),
            'pertanyaan' => $request->input('pertanyaan'),
            'bukti_transfer' => $imagePath,
            'status_pendaftaran' => $request->input('status_pendaftaran'),
            'ide_topik' => $request->input('ide_topik')
        ]);
        if ($response->status() == 200) {
            return redirect('/program/psytalk/daftar/success')->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect('/program/psytalk/{{$id}}/daftar')->with('success', 'Pendaftaran gagal!');
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
        $response = Http::get('https://ruangberproses-be.site/api/program/psytalk/' . $id);
        $response = $response->object();
        return view('program.psytalk.edit-reg', [
            'title' => 'Edit Data Pendaftaran Psytalk',
            'message' => NULL,
            'psytalk' => $response->data,
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
        $response = Http::asForm()->post("https://ruangberproses-be.site/api/admin/program/psytalk/" . $id . '?_method=PUT', [
            'user_id' => $request->input('user_id'),
            'psytalk_id' => $request->input('psytalk_id'),
            'alasan' => $request->input('alasan'),
            'asal_info' => $request->input('asal_info'),
            'pertanyaan' => $request->input('pertanyaan'),
            'status_pendaftaran' => $request->input('status_pendaftaran'),
            'ide_topik' => $request->input('ide_topik')
        ]);
        if ($response->status() == 200) {
            return redirect('/admin')->with('success', 'Pendaftaran berhasil!');
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
        $response = Http::delete("https://ruangberproses-be.site/api/admin/program/psytalk/" . $id);

        if ($response->status() == 200) {
            return redirect('/admin')->with('success', 'Psytalk data has been deleted!');
        }
    }

    public function regSuccess()
    {
        return view('program.registration-success', [
            'message' => NULL,
        ]);
    }
}