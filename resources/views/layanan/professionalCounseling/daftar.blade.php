@extends('layout.layout')

@push('styles')
<style>
nav ul li a {
    color: black !important;
}
</style>
@endpush

<!--  Hero -->
@section('content')
<section class="font-quicksand min-h-screen">
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
            <div class="w-1/2 lg:mb-6 text-left">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">EMAIL</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ session()->get('email') }}" required disabled>
            </div>
            <div class="grid grid-cols-2 gap-4 relative text-left">
                @if (session()->has('token'))
                <input type="hidden" id="user_id" name="user_id" value="{{ session()->get('id') }}">
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
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">JENIS
                        KELAMIN</label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ session()->get('jk') }}" required disabled>
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
                        <option value="{{ $pc->id }}">{{ $pc->id}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <input class="form-control mt-5 hidden" type="text" id="consent_sharing" name="consent_sharing"
                    value="L">
                <input class="form-control mt-5 hidden" type="text" id="consent_screening" name="consent_screening"
                    value="L">
            </div>
            </div>
            <input type="button" name="next" class="next action-button mb-8 rounded-full" value="Lanjut" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Screening</h2>
            <input type="button" name="previous" class="previous action-button" value="Kembali" />
            <input type="button" name="next" class="next action-button" value="Lanjut" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Upload Bukti Pembayaran</h2>
            <input class="form-control mt-5" type="file" id="bukti_transfer" name="bukti_transfer">
            </div>
            <input class="form-control mt-5 hidden" type="text" id="status_pendaftaran" name="status_pendaftaran"
                value="konfirmasi_admin">
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
    <!-- jQuery -->
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/multistep-form.js') }}"></script>
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