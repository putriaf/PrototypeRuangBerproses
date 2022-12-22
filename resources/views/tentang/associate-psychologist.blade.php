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
@endpush

@section('content')
<section class="mx-5 lg:mx-10 lg:my-20 font-quicksand my-20 lg:mt-28" style="">
    <div class="text-center mb-10 lg:mb-14">
        <h1 class="text-3xl font-bold mb-3 lg:mb-4">Associate Psychologist</h1>
        <p>Tenaga psikolog professional untuk mendampingimu berproses</p>
    </div>
    <div class="grid xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10 content-center place-items-stretch">
        @foreach($counselors as $counselor)
        <div
            class="text-center h-full shadow-md block p-6 max-w-sm bg-white rounded-lg border border-gray-200  hover:bg-gray-100">
            @if($counselor->foto == NULL)
            <img src="{{ asset('img/user/avatar.png') }}" alt="Ariyanto Yanwar, M.Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            @else
            <img src="{{asset('https://ruangberproses-dev.site/storage/' . $counselor->foto ) }}"
                alt="Ariyanto Yanwar, M.Psi., Psikolog"
                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 lg:mb-3">
            @endif
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $counselor->nama }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400 text-sm">{{ $counselor->bidang_keahlian }}</p>
            <a href="{{ $counselor->link_linkedin }}">
                <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto mt-3">
                    <path
                        d="M35 2.5H4.99219C3.61719 2.5 2.5 3.63281 2.5 5.02344V34.9766C2.5 36.3672 3.61719 37.5 4.99219 37.5H35C36.375 37.5 37.5 36.3672 37.5 34.9766V5.02344C37.5 3.63281 36.375 2.5 35 2.5ZM13.0781 32.5H7.89062V15.7969H13.0859V32.5H13.0781ZM10.4844 13.5156C8.82031 13.5156 7.47656 12.1641 7.47656 10.5078C7.47656 8.85156 8.82031 7.5 10.4844 7.5C12.1406 7.5 13.4922 8.85156 13.4922 10.5078C13.4922 12.1719 12.1484 13.5156 10.4844 13.5156ZM32.5234 32.5H27.3359V24.375C27.3359 22.4375 27.2969 19.9453 24.6406 19.9453C21.9375 19.9453 21.5234 22.0547 21.5234 24.2344V32.5H16.3359V15.7969H21.3125V18.0781H21.3828C22.0781 16.7656 23.7734 15.3828 26.2969 15.3828C31.5469 15.3828 32.5234 18.8438 32.5234 23.3438V32.5Z"
                        fill="black" />
                </svg>
            </a>
        </div>
        @endforeach
        <!-- <div
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
        </div> -->
    </div>
</section>
@endsection