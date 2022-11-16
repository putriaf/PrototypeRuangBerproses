@extends('layout.layout'),

@push('styles')
<style>
nav ul li a {
    color: black !important;
}
</style>
@endpush

<!--  Hero -->
@section('content')
<section class="font-quicksand">
    @if($screening == NULL)
    <div class="block lg:mx-44 lg:p-14 bg-pale-yellow lg:mt-40 text-center rounded-xl text-[#2b2b2b]">
        <h1 class="font-bold text-3xl lg:mb-5">Screening dulu yuk!</h1>
        <p class="lg:mb-10">Kamu perlu melakukan screening terlebih dahulu, sehingga psikolog kami bisa memahamimu lebih
            baik.<span class="italic">A single information matters!
                :)</span></p>
        <a href="/screening"
            class="button block mx-auto bg-[#eb6536] rounded-full w-1/3 lg:px-4 lg:py-3 text-white font-semibold uppercase motion-safe:animate-bounce-slow text-sm">Mulai
            Screening</a>
    </div>
    <div class="mt-20">
        <a href="/screening">Screening</a>
    </div>
    @endif
    @if($profilUser->nama != NULL && $profilUser->username != NULL && $profilUser->email != NULL && $profilUser->no_telp
    != NULL && $profilUser->tgl_lahir != NULL && $profilUser->domisili != NULL && $profilUser->pendidikan != NULL &&
    $profilUser->agama != NULL && $profilUser->pekerjaan != NULL && $profilUser->status != NULL)
    <form id="msform" class="font-quicksand max-h-screen mt-20 min-h-screen" method="POST"
        action="/layanan/professional-counseling/daftar" enctype="multipart/form-data">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar" class="mt-32">
            <li class="active rounded-full">Informasi Diri</li>
            <li>Kondisi Diri</li>
            <li>Pembayaran</li>
        </ul>
        <!-- fieldsets -->
        <fieldset style="overflow: auto">
            <h2 class="fs-title lg:mb-8">INFORMASI DIRI</h2>
            <div class="w-1/2 lg:mb-6 text-left gri grid-cols-2 gap-4">
                <div class="">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">EMAIL</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ session()->get('email') }}" required disabled>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 relative text-left">
                @if (session()->has('token'))
                <input type="hidden" id="user_id" name="user_id" value="{{ session()->get('id') }}">
                <input type="hidden" id="screening_id" name="screening_id" value="2">
                @endif
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NAMA
                        LENGKAP</label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ session()->get('nama') }}" required disabled>
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NOMOR
                        TELEPON</label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ session()->get('no_telp') }}" required>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">TANGGAL LAHIR</label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ session()->get('tgl_lahir') }}" required disabled>
                </div>
                <div class="">
                    <label for="preferensi_jk_konselor"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pilih Preferensi Jenis
                        Kelamin Konselor</label>
                    <select id="preferensi_jk_konselor" name="preferensi_jk_konselor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected="">Pilih Jenis Kelamin Konselor</option>
                        <option value="P">Perempuan</option>
                        <option value="L">Laki-laki</option>
                    </select>
                </div>
                <div class="">
                    <label for="procounseling_id"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pilih Konselor</label>
                    <select id="procounseling_id" name="procounseling_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected="">Pilih Konselor</option>
                        @if($procounselings != NULL)
                        @foreach($procounselings as $pc)
                        <option value="{{ $pc->id }}">{{ $pc->nama_konselor}}, {{ $pc->tanggal }} {{ $pc->waktu }}
                        </option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="">
                    <label for="sesi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Sesi</label>
                    <select id="sesi" name="sesi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected="">Sesi</option>
                        <option value="1">1
                        </option>
                        <option value="2">2
                        </option>
                        <option value="2">2
                        </option>
                    </select>
                </div>
                <input class="form-control mt-5 hidden" type="text" id="consent_sharing" name="consent_sharing"
                    value="Ya">
                <input class="form-control mt-5 hidden" type="text" id="consent_screening" name="consent_screening"
                    value="Ya">
            </div>
            </div>
            <input type="button" name="next" class="next action-button mb-8 rounded-full" value="Lanjut" />
        </fieldset>
        <fieldset class="overflow-y-auto  max-h-[80vh]">
            <h2 class="fs-title mb-2">Kondisi Diri</h2>
            <div class="mb-5 mt-7">
                <label for="perubahan_fisik"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Ceritakan
                    gejala/perubahan fisik yang kamu alami akhir-akhir ini
                </label>
                <textarea id="perubahan_fisik" rows="2" name="perubahan_fisik"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="perubahan_emosi"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Ceritakan gejala/
                    perubahan emosi yang kamu alami akhir-akhir ini
                </label>
                <textarea id="perubahan_emosi" rows="2" name="perubahan_emosi"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="riwayat_kecemasan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Bila kamu memiliki
                    riwayat kecemasan/ fobia, silahkan ceritakan
                </label>
                <textarea id="riwayat_kecemasan" rows="2" name="riwayat_kecemasan"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="penyakit_kronis"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Jika kamu memiliki
                    penyakit kronis, tolong ceritakan
                </label>
                <textarea id="penyakit_kronis" rows="2" name="penyakit_kronis"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="konsumsi_alkohol"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Apakah kamu
                    mengonsumsi alkohol?
                </label>
                <textarea id="konsumsi_alkohol" rows="2" name="konsumsi_alkohol"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="konsumsi_obat"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Apakah kamu
                    mengonsumsi obat-obatan yang termasuk narkotika?
                </label>
                <textarea id="konsumsi_obat" rows="2" name="konsumsi_obat"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="pola_tidur"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Ceritakan mengenai
                    pola tidurmu
                </label>
                <textarea id="pola_tidur" rows="2" name="pola_tidur"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="pola_makan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Ceritakan mengenai
                    pola makanmu
                </label>
                <textarea id="pola_makan" rows="2" name="pola_makan"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="kondisi_keuangan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Ceritakan mengenai
                    kondisi keuanganmu
                </label>
                <textarea id="kondisi_keuangan" rows="2" name="kondisi_keuangan"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="ringkasan_masalah"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Ceritakan mengenai
                    ringkasan masalahmu
                </label>
                <textarea id="ringkasan_masalah" rows="2" name="ringkasan_masalah"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="menyakiti_diri"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Ceritakan
                    gejala/perubahan fisik yang kamu alami akhir-akhir ini
                </label>
                <textarea id="menyakiti_diri" rows="2" name="menyakiti_diri"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <div class="mb-5">
                <label for="mengakhiri_hidup"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">Ceritakan
                    gejala/perubahan fisik yang kamu alami akhir-akhir ini
                </label>
                <textarea id="mengakhiri_hidup" rows="2" name="mengakhiri_hidup"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuangkan apa yang di pikiranmu di sini..." required></textarea>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Kembali" />
            <input type="button" name="next" class="next action-button" value="Lanjut" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Upload Bukti Pembayaran</h2>
            <input class="form-control mt-5" type="file" id="bukti_transfer" name="bukti_transfer">
            </div>
            <input class="form-control mt-5 hidden" type="text" id="status_pendaftaran" name="status_pendaftaran"
                value="konfirmasi_admin" required>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <div class="">
                <button class="c-btn__continue" id="continue-btn" type="submit">
                    <span>Continue</span>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 37 37" xml:space="preserve" class="u-loading" id="loading">
                        <path class="circ path"
                            style="fill:none;stroke:#fff;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;"
                            d="
	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z" />
                    </svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 37 37" xml:space="preserve" class="u-success">
                        <polyline class="tick path"
                            style="fill:none;stroke:#fff;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;"
                            points="
	11.6,20 15.9,24.2 26.4,13.8 " />
                    </svg>
                </button>
            </div>
        </fieldset>
    </form>
    @else
    <div class="block lg:mx-44 lg:p-14 bg-pale-yellow lg:mt-40 text-center rounded-xl text-[#2b2b2b]">
        <h1 class="font-bold text-3xl lg:mb-5">Lengkapi Profilmu!</h1>
        <p class="lg:mb-10">Untuk mendaftarkan diri ke layanan konseling, kamu perlu melengkapi informasi dirimu nih!
            Ini
            ditujukan agar
            psikolog kami bisa memahami lebih jauh tentang dirimu. <span class="italic">A single information matters!
                :)</span></p>
        <a href="/profile"
            class="button block mx-auto bg-[#eb6536] rounded-full w-1/3 lg:px-4 lg:py-3 text-white font-semibold uppercase motion-safe:animate-bounce-slow text-sm">Edit
            Profil</a>
    </div>
    @endif
</section>
@endsection