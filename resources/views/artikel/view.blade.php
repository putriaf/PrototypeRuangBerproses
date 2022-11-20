@extends('layout.layout')

@push('styles')
<style>
nav ul li a {
    color: black !important;
}
</style>
@endpush

@section('content')
<section class="mx-5 lg:mx-10 lg:my-10 font-quicksand mt-20 lg:mt-20 min-h-screen">
    <div class="">
        <h1 class="text-2xl sm:text-3xl font-bold">{{ $artikel->judul }}</h1>
        <div class="my-3 lg:my-5 text-sm">
            <p>oleh {{ $artikel->nama }}</p>
            <p>8 September 2022</p>
        </div>
    </div>
    <div class="sm:flex">
        <div class="sm:flex-auto sm:w-2/3 lg:mr-12">
            <div class="">
                <div class="">
                    <img src="{{ asset('img/illustrations/jumbotron-home.png') }}" alt="" class="rounded-lg">
                </div>
                <div class="mt-8 lg:mt-10">
                    <p class="mb-5">{{ $artikel->isi }}
                    </p>
                </div>
            </div>
        </div>
        <div class="sm:flex-auto sm:w-1/3">
            <h2 class="text-xl font-semibold mb-2 lg:mb-3">Artikel Terbaru</h2>
            <div class="mb-2 lg:mb-3">
                <h3 class="text-base font-semibold mb-1 lg:mb-1 line-clamp-1">Tips Mengatasi Kecanduan Media Sosial</h3>
                <p class="text-sm line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                    nulla, ut
                    recusandaeitationem?
                </p>
            </div>
            <div class="mb-2 lg:mb-3">
                <h3 class="text-base font-semibold mb-1 lg:mb-1 line-clamp-1">Tips Mengatasi Kecanduan Media Sosial</h3>
                <p class="text-sm line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                    nulla, ut
                    recusandaeitationem?
                </p>
            </div>
            <div class="mb-2 lg:mb-3">
                <h3 class="text-base font-semibold mb-1 lg:mb-1 line-clamp-1">Tips Mengatasi Kecanduan Media Sosial</h3>
                <p class="text-sm line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                    nulla, ut
                    recusandaeitationem?
                </p>
            </div>
        </div>
    </div>
</section>
@endsection