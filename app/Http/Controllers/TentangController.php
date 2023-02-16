<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tentang.profil-rb', [
            'title' => 'Profil Ruang Berproses',
            'message' => NULL
        ]);
    }

    public function viewPsychologist()
    {
        $response_counselor = Http::get("https://be.ruangberproses.id/api/admin/counselors");
        $counselor = $response_counselor->object();
        return view('tentang.associate-psychologist', [
            'title' => 'Associate Psychologist Ruang Berproses',
            'message' => NULL,
            'counselors' => $counselor->data
        ]);
    }

    public function viewTeam()
    {
        return view('tentang.tim-rb', [
            'title' => 'Tim Ruang Berproses',
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
        //
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
