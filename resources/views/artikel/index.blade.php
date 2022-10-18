@extends('layout.layout')

@section('content')
<section class="lg:mx-20 lg:my-10">
    <div class="mx-auto font-quicksand text-center lg:mb-12">
        <h1 class="text-3xl font-bold lg:mb-6">Artikel Berproses</h1>
    </div>
    <div class="">
        <form class="flex justify-center items-center">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-1/2">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search" required="">
            </div>
            <button type="submit"
                class="p-2.5 ml-2 text-sm font-medium text-white bg-red-400 rounded-lg border border-red-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
    <div class="lg:mt-14 font-quicksand w-2/3">
        <h2 class="text-xl lg:mb-8 font-semibold">Artikel Terbaru</h2>
        <div class="grid grid-rows-3 grid-flow-col gap-2 lg:mb-10">
            <div class="row-span-3 lg:mr-3">
                <img src="{{ asset('img/illustrations/jumbotron-home.png' ) }}" alt=""
                    class="rounded-lg h-full bg-cover">
            </div>
            <div class="col-span-2 self-end font-semibold text-lg">Lorem ipsum dolor sit amet</div>
            <div class="row-span-2 col-span-2 text-base"> consectetur adipisicing elit. Quo quisquam quod dolorem
                inventore commodi incidunt magni iste. Cumque alias corporis odio ullam sunt ad ab, aliquam magnam in
                quaerat </div>
        </div>
        <div class="grid grid-rows-3 grid-flow-col gap-2 lg:mb-10">
            <div class="row-span-3 lg:mr-3">
                <img src="{{ asset('img/illustrations/jumbotron-home.png' ) }}" alt=""
                    class="rounded-lg h-full bg-cover">
            </div>
            <div class="col-span-2 self-end font-semibold text-lg">Lorem ipsum dolor sit amet</div>
            <div class="row-span-2 col-span-2 text-base"> consectetur adipisicing elit. Quo quisquam quod dolorem
                inventore commodi incidunt magni iste. Cumque alias corporis odio ullam sunt ad ab, aliquam magnam in
                quaerat </div>
        </div>
        <div class="grid grid-rows-3 grid-flow-col gap-2 lg:mb-10">
            <div class="row-span-3 lg:mr-3">
                <img src="{{ asset('img/illustrations/jumbotron-home.png' ) }}" alt=""
                    class="rounded-lg h-full bg-cover">
            </div>
            <div class="col-span-2 self-end font-semibold text-lg">Lorem ipsum dolor sit amet</div>
            <div class="row-span-2 col-span-2 text-base"> consectetur adipisicing elit. Quo quisquam quod dolorem
                inventore commodi incidunt magni iste. Cumque alias corporis odio ullam sunt ad ab, aliquam magnam in
                quaerat </div>
        </div>
    </div>
</section>
@endsection