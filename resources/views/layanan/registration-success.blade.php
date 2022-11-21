@extends('layout.layout')

@section('content')
<section class="lg:mx-20 mt-14 lg:mt-28 mb-10 lg:mb-20 font-quicksand min-h-[60vh]">
    <img src="{{ asset('img/illustrations/check-circle.png') }}" alt="" class="w-16 mx-auto block">
    <h1 class="font-semibold text-xl text-center mt-4">Pendaftaranmu berhasil!</h1>
    <div class="text-center mt-10 text-base">
        <p class="font-medium">Tunggu konfirmasi pembayaran oleh admin maksimal 1x24 jam setelah pembayaran</p>
        <p class="">Kunjungi halaman Profil Saya untuk mengecek status pendaftaran</p>
        <p class="">Selamat Berproses!</p>
    </div>
    <div class="relative text-end">
        <a href="/profil"
            class="bg-rb-light-orange px-7 py-2 inline-block rounded-xl font-semibold text-white place-items-end mt-5">Profil
            Saya</a>
    </div>
</section>
@endsection