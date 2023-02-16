<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScreeningController extends Controller
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
        $screening_variable = ["marah_sepele", "mulut_kering", "tdk_melihat_hal_positif", "gangguan_napas", "tdk_kuat_kegiatan", "overreacting", "anggota_tubuh_lemah", "sulit_bersantai", "cemas_berlebih", "pesimis", "mudah_kesal", "energi_habis", "sedih_depresi", "tidak_sabaran", "kelelahan", "hilang_minat", "merasa_tdk_layak", "mudah_tersinggung", "berkeringat", "takut_tanpa_alasan", "merasa_tdk_berharga", "sulit_istirahat", "sulit_menelan", "tdk_menikmati_aktivitas", "perubahan_denyut_nadi", "hilang_harapan", "mudah_marah", "mudah_panik", "sulit_tenang", "takut_terhambat", "sulit_antusias", "sulit_toleransi_gangguan", "tegang", "merasa_tdk_berharga", "tdk_memaklumi_halangan", "ketakutan", "tdk_ada_harapan", "hidup_tdk_berarti", "mudah_gelisah", "khawatir_dg_situasi", "gemetar", "sulit_inisiatif", "merasa_hdp_tdk_berharga"];
        $screening_label = ["Menjadi marah karena hal-hal kecil/sepele", "Mulut terasa kering", "Tidak dapat melihat hal yang positif dari suatu kejadian", "Merasakan gangguan dalam bernapas (napas cepat,sulit bernapas)", "Merasa sepertinya tidak kuat lagi untuk melakukan suatu kegiatan", "Cenderung bereaksi berlebihan pada situasi", "Kelemahan pada anggota tubuh", "Kesulitan untuk relaksasi/bersantai", "Cemas yang berlebihan dalam suatu situasi namun bisa lega jika hal/situasi itu berakhir", "Pesimis", "Mudah merasa kesal", "Merasa banyak menghabiskan energi karena cemas", "Merasa sedih dan depresi", "Tidak sabaran", "Kelelahan", "Kehilangan minat pada banyak hal (misal: makan, ambulasi, sosialisasi)", "Merasa diri tidak layak", "Mudah tersinggung", "Berkeringat (misal: tangan berkeringat) tanpa stimulasi oleh cuaca maupun latihan fisik", "Ketakutan tanpa alasan yang jelas", "Merasa tidak berharga", "Sulit untuk beristirahat", "Kesulitan dalam menelan", "Tidak dapat menikmati hal-hal yang saya lakukan", "Perubahan kegiatan jantung dan denyut nadi tanpa stimulasi oleh latihan fisik", "Merasa hilang harapan dan putus asa", "Mudah marah", "Mudah panik", "Kesulitan untuk tenang setelah sesuatu yang mengganggu", "Takut diri terhambat oleh tugas-tugas yang tidak biasa dilakukan", "Sulit untuk antusias pada banyak hal", "Sulit mentoleransi gangguan-gangguan terhadap hal yang sedang dilakukan", "Berada pada keadaan tegang", "Merasa tidak berharga", "Tidak dapat memaklumi hal apapun yang menghalangi anda untuk menyelesaikan suatu hal", "Ketakutan", "Tidak ada harapan untuk masa depan", "Merasa hidup tidak berarti", "Mudah gelisah", "Khawatir dengan situasi saat diri Anda mungkin menjadi panik dan mempermalukan diri sendiri", "Gemetar", "Sulit untuk meningkatkan inisiatif dalam melakukan sesuatu", "Merasa hidup tidak berharga"];
        return view('screening.create', [
            'title' => 'Screening Pre-konseling',
            'screening_variables' => $screening_variable,
            'screening_labels' => $screening_label,
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
            'marah_sepele' => 'required',
            'mulut_kering' => 'required',
            'tdk_melihat_hal_positif' => 'required',
            'gangguan_napas' => 'required',
            'tdk_kuat_kegiatan' => 'required',
            'overreacting' => 'required',
            'anggota_tubuh_lemah' => 'required',
            'sulit_bersantai' => 'required',
            'cemas_berlebih' => 'required',
            'pesimis' => 'required',
            'mudah_kesal' => 'required',
            'energi_habis' => 'required',
            'sedih_depresi' => 'required',
            'tidak_sabaran' => 'required',
            'kelelahan' => 'required',
            'hilang_minat' => 'required',
            'merasa_tdk_berharga' => 'required',
            'mudah_tersinggung' => 'required',
            'berkeringat' => 'required',
            'takut_tanpa_alasan' => 'required',
            'merasa_hdp_tdk_berharga' => 'required',
            'sulit_istirahat' => 'required',
            'sulit_menelan' => 'required',
            'tdk_menikmati_aktivitas' => 'required',
            'perubahan_denyut_nadi' => 'required',
            'hilang_harapan' => 'required',
            'mudah_marah' => 'required',
            'mudah_panik' => 'required',
            'sulit_tenang' => 'required',
            'takut_terhambat' => 'required',
            'sulit_antusias' => 'required',
            'sulit_toleransi_gangguan' => 'required',
            'tegang' => 'required',
            'merasa_tdk_berharga' => 'required',
            'tdk_memaklumi_halangan' => 'required',
            'ketakutan' => 'required',
            'tdk_ada_harapan' => 'required',
            'hidup_tdk_berarti' => 'required',
            'mudah_gelisah' => 'required',
            'khawatir_dg_situasi' => 'required',
            'gemetar' => 'required',
            'sulit_inisiatif' => 'required'
        ]);

        $response = Http::asForm()->post("https://be.ruangberproses.id/api/screening", [
            'user_id' => $request->input('user_id'),
            'marah_sepele' => $request->input('marah_sepele'),
            'mulut_kering' => $request->input('mulut_kering'),
            'tdk_melihat_hal_positif' => $request->input('tdk_melihat_hal_positif'),
            'gangguan_napas' => $request->input('gangguan_napas'),
            'tdk_kuat_kegiatan' => $request->input('tdk_kuat_kegiatan'),
            'overreacting' => $request->input('overreacting'),
            'anggota_tubuh_lemah' => $request->input('anggota_tubuh_lemah'),
            'sulit_bersantai' => $request->input('sulit_bersantai'),
            'cemas_berlebih' => $request->input('cemas_berlebih'),
            'pesimis' => $request->input('pesimis'),
            'mudah_kesal' => $request->input('mudah_kesal'),
            'energi_habis' => $request->input('energi_habis'),
            'sedih_depresi' => $request->input('sedih_depresi'),
            'tidak_sabaran' => $request->input('tidak_sabaran'),
            'kelelahan' => $request->input('kelelahan'),
            'hilang_minat' => $request->input('hilang_minat'),
            'merasa_hdp_tdk_berharga' => $request->input('merasa_hdp_tdk_berharga'),
            'mudah_tersinggung' => $request->input('mudah_tersinggung'),
            'berkeringat' => $request->input('berkeringat'),
            'takut_tanpa_alasan' => $request->input('takut_tanpa_alasan'),
            'merasa_tdk_berharga' => $request->input('merasa_tdk_berharga'),
            'sulit_istirahat' => $request->input('sulit_istirahat'),
            'sulit_menelan' => $request->input('sulit_menelan'),
            'tdk_menikmati_aktivitas' => $request->input('tdk_menikmati_aktivitas'),
            'perubahan_denyut_nadi' => $request->input('perubahan_denyut_nadi'),
            'hilang_harapan' => $request->input('hilang_harapan'),
            'mudah_marah' => $request->input('mudah_marah'),
            'mudah_panik' => $request->input('mudah_panik'),
            'sulit_tenang' => $request->input('sulit_tenang'),
            'takut_terhambat' => $request->input('takut_terhambat'),
            'sulit_antusias' => $request->input('sulit_antusias'),
            'sulit_toleransi_gangguan' => $request->input('sulit_toleransi_gangguan'),
            'tegang' => $request->input('tegang'),
            'merasa_tdk_berharga' => $request->input('merasa_tdk_berharga'),
            'tdk_memaklumi_halangan' => $request->input('tdk_memaklumi_halangan'),
            'ketakutan' => $request->input('ketakutan'),
            'tdk_ada_harapan' => $request->input('tdk_ada_harapan'),
            'hidup_tdk_berarti' => $request->input('hidup_tdk_berarti'),
            'mudah_gelisah' => $request->input('mudah_gelisah'),
            'khawatir_dg_situasi' => $request->input('khawatir_dg_situasi'),
            'gemetar' => $request->input('gemetar'),
            'sulit_inisiatif' => $request->input('sulit_inisiatif'),
            'merasa_tdk_layak' => $request->input('merasa_tdk_layak')
        ]);
        // dd($response->status());
        if ($response->status() == 200) {
            return redirect('/layanan/professional-counseling/daftar')->with('success', 'Screening berhasil!');
        } else {
            return redirect('/screening')->with('success', 'Screening gagal!');
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
