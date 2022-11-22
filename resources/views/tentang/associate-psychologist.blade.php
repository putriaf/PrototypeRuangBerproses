@extends('layout.layout')

@push('styles')
<style>
nav ul li a {
    color: black !important;
}
</style>
@endpush

@section('content')
<section class="mx-5 lg:mx-10 lg:my-10 font-quicksand my-20 lg:mt-20">
    <div class="text-center mb-10 lg:mb-14">
        <h1 class="text-3xl font-bold mb-3 lg:mb-4">Associate Psychologist</h1>
        <p>Tenaga psikolog professional untuk mendampingimu berproses</p>
    </div>
    <div class="grid xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10">
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/ariyanto.png') }}" alt="Ariyanto Yanwar, M.Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Ariyanto Yanwar,
                M.Psi., Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/ayu.jpeg') }}" alt="Ayu Pradani S. Putri, M.Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Ayu Pradani S. Putri,
                M.Psi., Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/daniswara.jpeg') }}" alt="Daniswara Agusta Wijaya, M.Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Daniswara Agusta
                Wijaya, M.Psi., Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/laurentia.jpg') }}"
                alt="Laurentia Wahyu Prastiti, S.Psi., M.Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Laurentia Wahyu
                Prastiti, S.Psi., M.Psi., Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/lebda.jpeg') }}" alt="Lebda Katodhia., M.Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Lebda Katodhia.,
                M.Psi., Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/nica.jpg') }}" alt="Eukaristianica Theofani, M.Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Eukaristianica
                Theofani, M.Psi., Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/rininta.jpg') }}" alt="Rininta Meyftanoria, S.Psi, M.Psi, Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Rininta Meyftanoria,
                S.Psi, M.Psi, Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/stenny.jpg') }}" alt="Stenny Prawitasari, M. Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Stenny Prawitasari, M.
                Psi., Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/tiara.jpg') }}"
                alt="Tiara Adjeng Endrastyana, S.Psi., M.Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Tiara Adjeng
                Endrastyana, S.Psi., M.Psi., Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/utari.jpeg') }}" alt="Utari Krisnamurthi, M.Psi,. Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Utari Krisnamurthi,
                M.Psi,. Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            <img src="{{ asset('img/psychologists/vanessa.jpg') }}"
                alt="Vanessa Adistiafany Pricillia, M. Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Vanessa Adistiafany
                Pricillia, M. Psi., Psikolog</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>
        </div>
    </div>
</section>
@endsection