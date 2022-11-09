@extends('layout.layout')

<!--  Hero -->
@section('content')
<section class="font-quicksand">
    <form id="msform" class="font-quicksand max-h-screen" method="POST" action="/program/psytalk/daftar"
        enctype="multipart/form-data">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active rounded-full">Informasi Diri</li>
            <li>Latar Belakang</li>
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
                    <label for="psytalk_id"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pilih Topik</label>
                    <select id="psytalk_id" name="psytalk_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected="">Pilih Konselor</option>
                        @if($psytalks != NULL)
                        @foreach($psytalks as $psy)
                        <option value="{{ $psy->id }}">{{ $psy->topik }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            </div>
            <input type="button" name="next" class="next action-button mb-8 rounded-full" value="Lanjut" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Latar Belakang</h2>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ALASAN</label>
                <input type="text" id="alasan" name="alasan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ASAL INFO</label>
                <input type="text" id="asal_info" name="asal_info"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">PERTANYAAN</label>
                <input type="text" id="pertanyaan" name="pertanyaan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">IDE TOPIK</label>
                <input type="text" id="ide_topik" name="ide_topik"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
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
            <button type="submit"
                class="text-white font-bold bg-red-400 hover:bg-rb-light-orange focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Selesai</button>
        </fieldset>
    </form>
    <!-- jQuery -->
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/multistep-form.js') }}"></script>
</section>
@endsection