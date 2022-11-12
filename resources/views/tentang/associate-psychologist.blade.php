@extends('layout.layout')

@push('styles')
<style>
nav ul li a {
    color: black !important;
}
</style>
@endpush

@section('content')
<section class="lg:mx-10 lg:my-10 font-quicksand lg:mt-20">
    <div class="text-center lg:mb-14">
        <h1 class="text-3xl font-bold lg:mb-4">Associate Psychologist</h1>
        <p>Tenaga psikolog professional untuk mendampingimu berproses</p>
    </div>
    <div class="grid grid-cols-4 gap-10">
        <div class="text-center">
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="{{ asset('img/illustrations/jumbotron-home.png') }}" alt=""
                    class="w-20 h-20 rounded-full object-cover mx-auto lg:mb-3">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Psikolog 1</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>

            </a>
        </div>
        <div class="text-center">
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="{{ asset('img/illustrations/jumbotron-home.png') }}" alt=""
                    class="w-20 h-20 rounded-full object-cover mx-auto lg:mb-3">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Psikolog 1</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>

            </a>
        </div>
        <div class="text-center">
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="{{ asset('img/illustrations/jumbotron-home.png') }}" alt=""
                    class="w-20 h-20 rounded-full object-cover mx-auto lg:mb-3">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Psikolog 1</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>

            </a>
        </div>
        <div class="text-center">
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="{{ asset('img/illustrations/jumbotron-home.png') }}" alt=""
                    class="w-20 h-20 rounded-full object-cover mx-auto lg:mb-3">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Psikolog 1</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>

            </a>
        </div>
        <div class="text-center">
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="{{ asset('img/illustrations/jumbotron-home.png') }}" alt=""
                    class="w-20 h-20 rounded-full object-cover mx-auto lg:mb-3">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Psikolog 1</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Love relationship expert</p>

            </a>
        </div>
    </div>
</section>
@endsection