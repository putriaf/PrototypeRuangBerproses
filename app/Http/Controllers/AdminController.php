<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $screening_variable = ["marah_sepele", "mulut_kering", "tdk_melihat_hal_positif", "gangguan_napas", "tdk_kuat_kegiatan", "overreacting", "anggota_tubuh_lemah", "sulit_bersantai", "cemas_berlebih", "pesimis", "mudah_kesal", "energi_habis", "sedih_depresi", "tidak_sabaran", "kelelahan", "hilang_minat", "merasa_tdk_layak", "mudah_tersinggung", "berkeringat", "takut_tanpa_alasan", "merasa_tdk_berharga", "sulit_istirahat", "sulit_menelan", "tdk_menikmati_aktivitas", "perubahan_denyut_nadi", "hilang_harapan", "mudah_marah", "mudah_panik", "sulit_tenang", "takut_terhambat", "sulit_antusias", "sulit_toleransi_gangguan", "tegang", "tdk_memaklumi_halangan", "ketakutan", "tdk_ada_harapan", "hidup_tdk_berarti", "mudah_gelisah", "khawatir_dg_situasi", "gemetar", "sulit_inisiatif"];
        $response = Http::get('https://ruangberproses-be.herokuapp.com/api/admin');
        $response = $response->object();

        return view('admin.index', [
            'professionalcounselings' => $response->professionalcounselings,
            'regprofessionalcounselings' => $response->regprofessionalcounselings,
            'peercounselings' => $response->peercounselings,
            'regpeercounselings' => $response->regpeercounselings,
            'supportgroups' => $response->supportgroups,
            'regsupportgroups' => $response->regsupportgroups,
            'psytalks' => $response->psytalks,
            'regpsytalks' => $response->regpsytalks,
            'kb' => $response->kb,
            'regkbs' => $response->regkbs,
            'artikels' => $response->artikels,
            'screening_variable' => $screening_variable,
            'screenings' => $response->screenings
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