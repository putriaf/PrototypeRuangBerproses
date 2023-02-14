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
        $screening_variable = ["user_id", "marah_sepele", "mulut_kering", "tdk_melihat_hal_positif", "gangguan_napas", "tdk_kuat_kegiatan", "overreacting", "anggota_tubuh_lemah", "sulit_bersantai", "cemas_berlebih", "pesimis", "mudah_kesal", "energi_habis", "sedih_depresi", "tidak_sabaran", "kelelahan", "hilang_minat", "merasa_tdk_layak", "mudah_tersinggung", "berkeringat", "takut_tanpa_alasan", "merasa_tdk_berharga", "sulit_istirahat", "sulit_menelan", "tdk_menikmati_aktivitas", "perubahan_denyut_nadi", "hilang_harapan", "mudah_marah", "mudah_panik", "sulit_tenang", "takut_terhambat", "sulit_antusias", "sulit_toleransi_gangguan", "tegang", "tdk_memaklumi_halangan", "ketakutan", "tdk_ada_harapan", "hidup_tdk_berarti", "mudah_gelisah", "khawatir_dg_situasi", "gemetar", "sulit_inisiatif"];
        $counseling_fields = ["counselor_id", "biaya"];
        $sg_fields = ["topik", "fasilitator_utama", "fasilitator_pendamping", "tanggal", "waktu", "biaya"];
        $program_fields = ["topik", "pembicara", "tanggal", "waktu", "biaya", "poster"];
        $regprocounseling_fields = ["user_id", "procounseling_id", "screening_id", "consent_sharing", "consent_screening", "bukti_transfer", "status_pendaftaran", "perubahan_fisik", "perubahan_emosi", "riwayat_kecemasan", "penyakit_kronis", "konsumsi_alkohol", "konsumsi_obat", "pola_tidur", "pola_makan", "kondisi_keuangan", "ringkasan_masalah", "pernah_konseling", "menyakiti_diri", "mengakhiri_hidup"];
        $regpeercounseling_fields = ["user_id", "screening_id", "latar_belakang", "tujuan", "keluhan", "consent_sharing", "consent_screening", "bukti_transfer", "status_pendaftaran"];
        $regsg_fields = ["user_id", "tujuan", "alasan", "harapan", "preferensi_jk_fasilitator", "preferensi_jk_teman", "diagnosis", "terlibat_aktif", "mengikuti_full", "batasan_pribadi", "consent_screening", "consent_sharing", "bukti_transfer", "status_pendaftaran"];
        $regpsytalk_fields = ["user_id", "psytalk_id", "alasan", "asal_info", "pertanyaan", "bukti_transfer", "status_pendaftaran", "ide_topik"];
        $regkb_fields = ["user_id", "kb_id", "alasan", "asal_info", "pertanyaan", "bukti_transfer", "status_pendaftaran", "ide_topik"];

        $response = Http::get('https://ruangberproses-be.site/api/admin');
        $response = $response->object();

        $response_counselors = Http::get('https://ruangberproses-be.site/api/admin/counselors');
        $counselors = $response_counselors->object();

        return view('admin.index', [
            'professionalcounselings' => $response->professionalcounselings,
            'regprofessionalcounselings' => $response->regprofessionalcounselings,
            'peercounselings' => $response->peercounselings,
            'regpeercounselings' => $response->regpeercounselings,
            'supportgroups' => $response->supportgroups,
            'regsupportgroups' => $response->regsupportgroups,
            'psytalks' => $response->psytalks,
            'regpsytalks' => $response->regpsytalks,
            'kbs' => $response->kb,
            'regkbs' => $response->regkbs,
            'artikels' => $response->artikels,
            'screenings' => $response->screenings,
            'screening_variable' => $screening_variable,
            'counseling_fields' => $counseling_fields,
            'sg_fields' => $sg_fields,
            'program_fields' => $program_fields,
            'regprocounseling_fields' => $regprocounseling_fields,
            'regpeercounseling_fields' => $regpeercounseling_fields,
            'regsg_fields' => $regsg_fields,
            'regpsytalk_fields' => $regpsytalk_fields,
            'regkb_fields' => $regkb_fields,
            'counselors' => $counselors->data
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
