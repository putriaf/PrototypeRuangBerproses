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
    public function index(Request $request)
    {
        $response = Http::get('https://be.ruangberproses.id/api/admin/program/psytalk-list', [
            'page' => $request->query('page')
        ]);
        $psytalks = $response->object();
        return view('program.psytalk.index', [
            'title' => 'Psychology Talk',
            'message' => NULL,
            'psytalks' => $psytalks->data,
            'page' => $psytalks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program.psytalk.create', [
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
            'tanggal' => 'required',
            'waktu' => 'required',
            'biaya' => 'required',
            'poster' => 'required',
            'link_event' => 'required'
        ]);

        $response = Http::asForm()->post("https://be.ruangberproses.id/api/admin/program/psytalk-list/tambah", [
            'topik' => $request->input('topik'),
            'pembicara' => $request->input('pembicara'),
            'tanggal' => $request->input('tanggal'),
            'waktu' => $request->input('waktu'),
            'biaya' => $request->input('biaya'),
            'poster' => $request->input('biaya'),
            'link_event' => $request->input('link_event'),
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
        $response = Http::get("https://be.ruangberproses.id/api/program/psytalk/" . $id);
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
        $response = Http::get("https://be.ruangberproses.id/api/admin/program/psytalk-list/" . $id);
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
        $response  = Http::asForm()->post("https://be.ruangberproses.id/api/admin/program/psytalk-list/" . $id . '?_method=PUT', [
            'topik' => $request->input('topik'),
            'pembicara' => $request->input('pembicara'),
            'tanggal' => $request->input('tanggal'),
            'waktu' => $request->input('waktu'),
            'biaya' => $request->input('biaya'),
            'poster' => $request->input('poster'),
            'link_event' => $request->input('link_event'),
        ]);
        if ($response->status() == 200) {
            return redirect('/admin')->with('success', 'Edit data berhasil!');
        } else {
            return redirect('/admin/program/psytalk/{id}/edit')->with('success', 'Edit data gagal!');
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
        $response = Http::delete("https://be.ruangberproses.id/api/admin/program/psytalk-list/" . $id);

        if ($response->status() == 200) {
            return redirect('/admin')->with('success', 'Psytalk data has been deleted!');
        }
    }
}
