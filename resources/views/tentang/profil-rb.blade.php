@extends('layout.layout')

@push('styles')
<style>
nav ul li a {
    color: black !important;
}
</style>
<link rel="stylesheet" href="{{ asset('css/profile-milestone.css') }}">
@endpush

@section('content')
<section class="lg:mx-10 lg:my-10 font-quicksand overflow-x-hidden lg:pt-20">
    <div class=" text-center">
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
        <section class="timeline text-white">
            <ul>
                <li>
                    <div class="rounded bg-primary-dark-blue">
                        <time>Juli 2020</time> Ruang berproses didirikan oleh Yohana Sondang Activa Hutabarat, M.Psi
                        pada Juli 2020. Ruang Berproses merupakan sebuah StartUp psikologi sekaligus media yang membantu
                        teman-teman berproses bersama menuju versi terbaiknya dengan menjaga kesehatan mentalnya
                    </div>
                </li>
                <li>
                    <div class="rounded bg-primary-dark-blue">
                        <time>Juli 2020</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi.
                        Suspendisse
                        finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
                    </div>
                </li>
                <li>
                    <div class="rounded bg-primary-dark-blue">
                        <time>2021</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at
                        pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
                    </div>
                </li>
                <li>
                    <div class="rounded bg-primary-dark-blue">
                        <time>2022</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse
                        varius volutpat mattis. Vestibulum id magna est.
                    </div>
                </li>
            </ul>
        </section>
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/profile-milestone.js') }}"></script>
@endpush