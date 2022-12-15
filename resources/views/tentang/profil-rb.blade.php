@extends('layout.layout')

@push('styles')
<style>
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
<link rel="stylesheet" href="{{ asset('css/profile-milestone.css') }}">
@endpush

@section('content')
<section
    class="xs:mx-5 sm:mx-10 md:mx-10 lg:mx-20 lg:my-10 font-quicksand overflow-x-hidden xs:pt-20 sm:pt-20 pt-24 md:pt-20 lg:pt-20">
    <div class="text-center">
        <h1 class="text-3xl font-bold xs:mb-4 sm:mb-4 md:mb-4 lg:mb-4">Ruang Berproses</h1>
        <p>Selalu ada ruang untuk kamu berproses menuju versi terbaikmu</p>
    </div>
    <div class="flex xs:mt-8 sm:mt-10 md:mt-10 lg:mt-10 xs:items-center md:items-end">
        <div class="flex-auto xs:w-full sm:w-2/3">
            <div class="w-1/3 mx-auto sm:hidden">
                <img src="{{ asset('img/ruang-berproses/rb-only-logo.png') }}" alt="" class="">
            </div>
            <div class="xs:mb-6 sm:mb-7 md:mb-7 lg:mb-8">
                <h2 class="text-xl font-semibold xs:mb-3 sm:mb-5 md:mb-5 lg:mb-5">Visi</h2>
                <p class="text-justify">Setiap orang menyadari bahwa Kesehatan mental adalah penting dan setiap orang
                    memiliki ruang untuk
                    berproses dengan dirinya.</p>
            </div>
            <div class="">
                <h2 class="text-xl font-semibold xs:mb-3 sm:mb-5 md:mb-5 lg:mb-5">Misi</h2>
                <p class="text-justify">Mengadvokasi mengenai pentingnya akan Kesehatan mental dan mendampingi setiap
                    orang yang ingin
                    berproses
                    dengan kondisi kesehatan mentalnya selaras dengan perubahan yang terus terjadi didalam proses
                    kehidupan
                </p>
            </div>
        </div>
        <div class="flex-auto xs:hidden sm:block w-1/3 xs:pl-10 md:pl-10 lg:pl-32">
            <img src="{{ asset('img/ruang-berproses/rb-only-logo.png') }}" alt="" class="">
        </div>
    </div>
    <div class="text-center xs:mt-16 sm:mt-15  md:mt-20 lg:mt-20">
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
                        <time>Juli 2020</time>Psytalk merupakan program pertama yang dimiliki oleh Ruang Berproses.
                        Bermula sejak Founder memberanikan diri untuk membuat webinar dengan judul 'It's okay not to be
                        okay' dan mengundang temannya seorang Psikolog yang berada di Thailand, Priska Sinaga. Dari
                        webinar tersebut mendapatkan Banyak feedback positif dari peserta, dan request untuk sesi
                        lanjutan.
                    </div>
                </li>
                <li>
                    <div class="rounded bg-primary-dark-blue">
                        <time>Februari 2022</time>Ruang berproses sudah merekrut tim lebih dari 50 orang terhitung sudah
                        di batch 6 dan tidak hanya itu RB membuat beberapa program kreatif seperti Campaign, Brand
                        Ambassador dan sesekali berkolaborasi dengan StartUp Psikologi lainnya.
                    </div>
                </li>
                <li>
                    <div class="rounded bg-primary-dark-blue">
                        <time>November 2022</time>Ruang Berproses memasuki masa volunteer Batch 7 dan mempunyai pengikut
                        yang mencapai 7000 di media sosial instagram.
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