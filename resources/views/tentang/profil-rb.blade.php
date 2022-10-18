@extends('layout.layout')

@section('content')
<section class="lg:mx-10 lg:my-10 font-quicksand">
    <div class="text-center">
        <h1 class="text-3xl font-bold lg:mb-4">Ruang Berproses</h1>
        <p>Selalu ada ruang untuk kamu berproses menuju versi terbaikmu</p>
    </div>
    <div class="flex lg:mt-10 items-end">
        <div class="flex-auto w-2/3">
            <div class="lg:mb-8">
                <h2 class="text-xl font-semibold lg:mb-5">Visi</h2>
                <p>Setiap orang menyadari bahwa Kesehatan mental adalah penting dan setiap orang memiliki ruang untuk
                    berproses dengan dirinya.</p>
            </div>
            <div class="">
                <h2 class="text-xl font-semibold lg:mb-5">Misi</h2>
                <p>Mengadvokasi mengenai pentingnya akan Kesehatan mental dan mendampingi setiap orang yang ingin
                    berproses
                    dengan kondisi kesehatan mentalnya selaras dengan perubahan yang terus terjadi didalam proses
                    kehidupan
                </p>
            </div>
        </div>
        <div class="flex-auto w-1/3 lg:pl-32">
            <img src="{{ asset('img/ruang-berproses/rb-only-logo.png') }}" alt="" class="">
        </div>
    </div>
    <div class="text-center lg:mt-20">
        <h1 class="text-3xl font-bold lg:mb-4">Perjalanan Ruang Berproses</h1>
    </div>
</section>
@endsection