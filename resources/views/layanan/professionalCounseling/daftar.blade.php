@extends('layout.layout')

@push('styles')
<style>
nav ul li {
    align-self: flex-end;
}

footer {
    display: none;
}


nav ul li a {
    color: black !important;
}

nav {
    background-color: white !important;
    border-radius: 0;
    transition: all 0.4s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}

nav svg {
    color: #eb6536 !important;
}
</style>


<link href="{{ asset('css/multistep-form.css') }}" rel="stylesheet">
<link href="{{ asset('scss/submit-btn.scss') }}" rel="stylesheet">
@endpush

<!--  Hero -->
@section('content')
<section class="font-quicksand pt-16">
    @if($screening == NULL)
    <div class="block lg:mx-44 lg:p-14 bg-pale-yellow lg:mt-20 text-center rounded-xl text-[#2b2b2b]">
        <h1 class="font-bold text-3xl lg:mb-5">Screening dulu yuk!</h1>
        <p class="lg:mb-10">Kamu perlu melakukan screening terlebih dahulu, sehingga psikolog kami bisa memahamimu lebih
            baik.<span class="italic">A single information matters!
                :)</span></p>
        <a href="/screening"
            class="button block mx-auto bg-[#eb6536] rounded-full w-1/3 lg:px-4 lg:py-3 text-white font-semibold uppercase motion-safe:animate-bounce-slow text-sm">Mulai
            Screening</a>
    </div>
    @elseif($profilUser->nama != NULL && $profilUser->username != NULL && $profilUser->email != NULL &&
    $profilUser->no_telp
    != NULL && $profilUser->tgl_lahir != NULL && $profilUser->domisili != NULL && $profilUser->pendidikan != NULL &&
    $profilUser->agama != NULL && $profilUser->pekerjaan != NULL && $profilUser->status != NULL)
    <div class=" mx-auto container font-quicksand">
        <!-- Progress Form -->
        <form id="progress-form" class="p-4 progress-form" action="/layanan/professional-counseling/daftar"
            method="POST" lang="en" novalidate enctype="multipart/form-data">
            @csrf
            <!-- Step Navigation -->
            <div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
                <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button"
                    role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
                    <span class="d-block step" aria-hidden="true">Step 1 <span class="sm:d-none">of 3</span></span>
                    Informasi Diri
                </button>
                <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button"
                    role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1"
                    aria-disabled="true">
                    <span class="d-block step" aria-hidden="true">Step 2 <span class="sm:d-none">of 3</span></span>
                    Kondisi Diri
                </button>
                <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button"
                    role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1"
                    aria-disabled="true">
                    <span class="d-block step" aria-hidden="true">Step 3 <span class="sm:d-none">of 3</span></span>
                    Pembayaran
                </button>
            </div>
            <!-- End Step Navigation -->

            <!-- Step 1 -->
            <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0"
                class="min-h-[50vh] lg:h-[55vh] overflow-auto box-border">
                <h3 class="text-xl font-semibold mt-6">Review Informasi Diri</h3>
                <div class="sm:grid sm:grid-cols-2 md:grid-cols-3 mt-1 mb-3 gap-4"
                    style="margin-bottom: 40px !important">
                    <div class="sm:mt-0 form__field">
                        <label for="nama">
                            Nama Lengkap
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input type="text" name="nama" id="nama" required class="rounded-md"
                            value="{{ session()->get('nama') }}" disabled>
                    </div>
                    <div class="sm:mt-0 form__field">
                        <label for="email">
                            Email
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input type="text" name="email" id="email" required class="rounded-md"
                            value="{{ session()->get('email') }}" disabled>
                    </div>
                    <div class="sm:mt-0 form__field">
                        <label for="no_telp">
                            Nomor Telepon
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input type="text" name="no_telp" id="no_telp" required class="rounded-md"
                            value="{{ session()->get('no_telp') }}" disabled>
                    </div>
                    <div class="sm:mt-0 form__field">
                        <label for="jk">
                            Jenis Kelamin
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input type="text" name="jk" id="jk" required class="rounded-md"
                            value="{{ session()->get('jk') }}" disabled>
                    </div>
                    <div class="sm:mt-0 form__field">
                        <label for="tgl_lahir">
                            Tanggal Lahir
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input type="text" name="tgl_lahir" id="tgl_lahir" required class="rounded-md"
                            value="{{ session()->get('tgl_lahir') }}" disabled>
                    </div>
                </div>
                <h3 class="text-xl font-semibold xs:mt-3 mt-5">Preferensi Psikolog
                </h3>
                <p class="text-sm font-medium text-dark-blue mt-2 mb-5">Temukan psikolog yang sesuai dengan
                    kebutuhanmu <a class="underline" href="/tentang/associate-psychologist" target="blank">disini.</a>
                </p>
                <div class="sm:grid sm:grid-cols-2 md:grid-cols-2 sm:my-1 gap-4">
                    <input type="text" id="user_id" name="user_id" value="{{ session()->get('id') }}" class="hidden">
                    <input type="text" id="screening_id" name="screening_id" value="{{ $screening->id }}"
                        class="hidden">
                    <input type="text" id="status_pendaftaran" name="status_pendaftaran" value="konfirmasi_admin" class="
                        hidden">
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="procounseling_id">
                            Preferensi Psikolog
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <select id="procounseling_id" name="procounseling_id" autocomplete="" required
                            class="rounded-md">
                            <option value="" disabled selected>Pilih psikolog</option>
                            @if($procounselings != NULL)
                            @foreach($procounselings as $pc)
                            <option value="{{ $pc->counselor_id }}">{{ $pc->nama }}
                            </option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="sesi">
                            Sesi
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <input type="number" name="sesi" id="sesi" required class="rounded-md"
                            placeholder="Sesi konseling saat ini">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-2 md:grid-cols-2 sm:my-1 gap-4">
                    <div x-data
                        x-init="flatpickr($refs.datetimewidget, {wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K'});"
                        x-ref="datetimewidget" class="flatpickr container mx-auto mt-3 sm:mt-0 form__field">
                        <label for="opsi_waktu1"
                            class="form__field flex-grow block font-medium text-sm text-gray-700 mb-1">Opsi Waktu
                            1 <span data-required="true" aria-hidden="true"></span></label>
                        <div class="flex align-middle align-content-center">
                            <input x-ref="datetime" type="text" id="opsi_waktu1" data-input required
                                placeholder="Pilih waktu" name="opsi_waktu1"
                                class="block w-full px-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">

                            <a class="h-11 w-10 input-button cursor-pointer rounded-r-md bg-transparent border-gray-300 border-t border-b border-r"
                                title="clear" data-clear>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mt-2 ml-1" viewBox="0 0 20 20"
                                    fill="#c53030">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div x-data
                        x-init="flatpickr($refs.datetimewidget, {wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K'});"
                        x-ref="datetimewidget" class="flatpickr container mx-auto mt-3 sm:mt-0 form__field">
                        <label for="opsi_waktu2"
                            class="form__field flex-grow block font-medium text-sm text-gray-700 mb-1">Opsi Waktu
                            2 <span data-required="true" aria-hidden="true"></span></label>
                        <div class="flex align-middle align-content-center">
                            <input x-ref="datetime" type="text" id="opsi_waktu2" data-input required
                                placeholder="Pilih waktu" name="opsi_waktu2"
                                class="block w-full px-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">

                            <a class="h-11 w-10 input-button cursor-pointer rounded-r-md bg-transparent border-gray-300 border-t border-b border-r"
                                title="clear" data-clear>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mt-2 ml-1" viewBox="0 0 20 20"
                                    fill="#c53030">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <input class="hidden" type="text" id="consent_sharing" name="consent_sharing" value="Ya">
                <input class="hidden" type="text" id="consent_screening" name="consent_screening" value="Ya">
                <div class="d-flex align-items-center justify-end sm:justify-end mt-8 sm:mt-8 lg:mt-8">
                    <button type="button" data-action="next" class="text-base mt-4 right-0 text-right rounded-md"
                        style="background-color: #1D1F4E; color: whitesmoke; padding: 5px 35px; width: auto">
                        Lanjut
                    </button>
                </div>
                <input class="hidden" type="text" id="pernah_konseling" name="pernah_konseling" value="-">
            </section>
            <!-- / End Step 1 -->

            <!-- Step 2 -->
            <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0"
                hidden class="min-h-[50vh] lg:h-[55vh] overflow-auto box-border">
                <div class="grid grid-cols-1 gap-6 mt-6">
                    <div class="mt-3 sm:mt-0 lg:mt-2 form__field">
                        <label for="perubahan_fisik">
                            Ceritakan gejala/perubahan fisik yang kamu alami akhir-akhir ini
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <textarea id="perubahan_fisik" name="perubahan_fisik" rows="3"
                            class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3" required></textarea>
                    </div>
                    <div class="mt-3 sm:mt-0 lg:mt-2 form__field">
                        <label for="perubahan_emosi">
                            Ceritakan gejala/perubahan fisik yang kamu alami akhir-akhir ini
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <textarea id="perubahan_emosi" name="perubahan_emosi" rows="3"
                            class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3" required></textarea>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="riwayat_kecemasan">
                            Jelaskan riwayat kecemasan/ketakutan yang kamu alami
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <textarea id="riwayat_kecemasan" name="riwayat_kecemasan" rows="3"
                            class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3" required></textarea>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="penyakit_kronis">
                            Ceritakan penyakit kronis yang kamu punya
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <textarea id="penyakit_kronis" name="penyakit_kronis" rows="3"
                            class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3" required></textarea>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="konsumsi_alkohol">
                            Apakah kamu mengonsumsi alkohol?
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <div class="flex align-middle">
                            <div class="flex items-center mr-4">
                                <input id="konsumsi_alkohol" type="radio" value="Ya" name="konsumsi_alkohol" required
                                    class="w-2 h-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="konsumsi_alkohol"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 p-0">
                                    Ya</label>
                            </div>
                            <div class="flex items-center mr-4">
                                <input id="konsumsi_alkohol" type="radio" value="Tidak" name="konsumsi_alkohol" required
                                    class="w-2 h-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="konsumsi_alkohol"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 p-0">
                                    Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="konsumsi_obat">
                            Apakah kamu mengonsumsi obat-obatan?
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <div class="flex align-middle">
                            <div class="flex items-center mr-4">
                                <input id="konsumsi_obat" type="radio" value="Ya" name="konsumsi_obat" required
                                    class="w-2 h-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="konsumsi_obat"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 p-0">
                                    Ya</label>
                            </div>
                            <div class="flex items-center mr-4">
                                <input id="konsumsi_obat" type="radio" value="Tidak" name="konsumsi_obat" required
                                    class="w-2 h-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="konsumsi_obat"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 p-0">
                                    Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="pola_tidur">
                            Ceritakan mengenai pola tidurmu
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <textarea id="pola_tidur" name="pola_tidur" rows="3"
                            class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3" required></textarea>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="pola_makan">
                            Ceritakan mengenai pola makanmu
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <textarea id="pola_makan" name="pola_makan" rows="3"
                            class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3" required></textarea>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="kondisi_keuangan">
                            Bagaimana kondisi keuanganmu?
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <textarea id="kondisi_keuangan" name="kondisi_keuangan" rows="3"
                            class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3" required></textarea>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="menyakiti_diri">
                            Apakah kamu pernah mempunyai sepintas pikiran untuk menyakiti dirimu?
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <div class="flex align-middle">
                            <div class="flex items-center mr-4">
                                <input id="menyakiti_diri" type="radio" value="Pernah" name="menyakiti_diri" required
                                    class="w-2 h-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="menyakiti_diri"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 p-0">
                                    Pernah</label>
                            </div>
                            <div class="flex items-center mr-4">
                                <input id="menyakiti_diri" type="radio" value="Tidak Pernah" name="menyakiti_diri"
                                    required
                                    class="w-2 h-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="menyakiti_diri"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 p-0">
                                    Tidak Pernah</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="mengakhiri_hidup">
                            Apakah kamu pernah mempunyai sepintas pikiran untuk mengakhiri hidup?
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <div class="flex">
                            <div class="flex items-center mr-4 mb-1">
                                <input id="mengakhiri_hidup" type="radio" name="mengakhiri_hidup"
                                    class="w-2 h-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required value="Pernah">
                                <label for="mengakhiri_hidup"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 p-0">Pernah</label>
                            </div>
                            <div class="flex items-center mr-4">
                                <input id="mengakhiri_hidup" type="radio" name="mengakhiri_hidup"
                                    class="w-2 h-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required value="Tidak Pernah">
                                <label for="mengakhiri_hidup"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 p-0">Tidak
                                    Pernah</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 form__field">
                        <label for="ringkasan_masalah">
                            Kalau bisa diringkas dari pertanyaan di atas, bagaimana keadaan mu saat ini?
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <textarea id="ringkasan_masalah" name="ringkasan_masalah" rows="3"
                            class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3" required></textarea>
                    </div>
                </div>
                <div
                    class="d-flex flex-column-reverse sm:flex-row align-items-center justify-start sm:justify-end mt-6">
                    <button type="button" class="button--simple text-base font-semibold" data-action="prev"
                        style="color: #1D1F4E; padding-right: 15px; width: auto">
                        Kembali
                    </button>
                    <button type="button" data-action="next" class="text-base rounded-md"
                        style="background-color: #1D1F4E; color: whitesmoke; padding: 5px 35px; width: auto">
                        Lanjut
                    </button>
                </div>
            </section>
            <!-- / End Step 2 -->

            <!-- Step 3 -->
            <section id="progress-form__panel-3" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0"
                hidden class="min-h-[50vh] lg:h-[55vh] overflow-auto box-border"">
                <h3 class=" text-xl font-semibold mt-6">Upload Bukti Pembayaran</h3>
                <div class="my-4 rounded-md text-base font-normal" style="border: 1px solid #1D1F4E; padding: 5px">
                    <p class="font-semibold">Metode Pembayaran:</p>
                    <p>BCA: 6241059607 a.n. Yohana Sondang</p>
                    <p>OVO: 085156065094 a.n. Yohana Sondang</p>
                </div>
                <div class="form__field" style="margin-top:20px;">
                    <label for="bukti_transfer" class="text-base">
                        Bukti Transfer
                        <span data-required="true" aria-hidden="true"></span>
                    </label>
                    <input class="form-control text-base" type="file" id="bukti_transfer" name="bukti_transfer"
                        required>
                </div>
                <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-end sm:justify-end mt-6">
                    <button type="button" class="sm:mt-0 button--simple text-base font-semibold" data-action="prev"
                        style="color: #1D1F4E; padding: 5px 35px; width: auto">
                        Kembali
                    </button>
                    <button type="submit" class="c-btn__continue text-base" id="continue-btn"
                        style="background-color: #1D1F4E; color: whitesmoke; padding: 5px 35px; width: auto"
                        class="mt-4 right-0 text-right rounded-md"><span>Submit</span>
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
            </section>
            <!-- / End Step 3 -->

        </form>
        <!-- / End Progress Form -->
        @else
        <div class="block lg:mx-44 lg:p-14 bg-pale-yellow lg:mt-20 text-center rounded-xl text-[#2b2b2b] mb-10">
            <h1 class="font-bold text-3xl lg:mb-5">Lengkapi Profilmu!</h1>
            <p class="lg:mb-10">Untuk mendaftarkan diri ke layanan konseling, kamu perlu melengkapi informasi dirimu
                nih!
                Ini
                ditujukan agar
                psikolog kami bisa memahami lebih jauh tentang dirimu. <span class="italic">A single information
                    matters!
                    :)</span></p>
            <a href="/profile"
                class="button block mx-auto bg-[#eb6536] rounded-full w-1/3 lg:px-4 lg:py-3 text-white font-semibold uppercase motion-safe:animate-bounce-slow text-sm">Edit
                Profil</a>
        </div>
        @endif
    </div>
</section>
@endsection

@push('scripts')
<!-- MULTI STEP FORM -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="{{ asset('js/submit-btn.js') }}"></script>
<script src="{{ asset('js/multistep-form.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
@endpush