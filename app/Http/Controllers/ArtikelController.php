<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://ruangberproses-be.herokuapp.com/api/artikel-berproses');
        $response = $response->object();

        return view('artikel.index', [
            'title' => 'Artikel Berproses',
            'message' => NULL,
            'artikels' => $response->artikels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create', [
            'title' => 'Tambah Artikel',
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
            'judul' => 'required',
            'isi' => 'required',
            'poster' => 'required'
        ]);

        $uploadPath = public_path('storage/poster-artikel');
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $uniqueFileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $uniqueFileName);
            $imagePath = 'poster-artikel/' . $uniqueFileName;
        } else {
            $imagePath = NULL;
        }

        $response = Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/daftar", [
            'user_id' => $request->input('user_id'),
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'poster' => $imagePath
        ]);
        if ($response->status() == 200) {
            return redirect('/artikel-berproses')->with('success', 'Penambahan artikel berhasil!');
        } else {
            return redirect('/admin/artikel-berproses/tambah')->with('success', 'Penambahan artikel gagal!');
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
        return view('artikel.view', [
            'title' => 'Artikel Berproses',
            'message' => NULL
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
        //
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
        //
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
}