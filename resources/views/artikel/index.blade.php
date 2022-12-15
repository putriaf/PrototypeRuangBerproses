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
<link rel="stylesheet" href="{{ asset('css/autocomplete-search.css') }}">
@endpush

@section('content')
<section class="sm:mx-5 md:mx-10 lg:mx-20 mt-24 lg:mt-28 mb-10 lg:mb-10">
    <div class="mx-auto font-quicksand text-center lg:mb-12">
        <h1 class="text-3xl font-bold mb-6 lg:mb-6">Artikel Berproses</h1>
    </div>
    <div class="">
        <form class="flex justify-center items-start" action="/artikel-berproses" autocomplete="off">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-1/2">
                <div class="flex absolute inset-y-0 left-0 pt-3 pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="">
                    <input type="text" id="search" name="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search" value="{{ request('search') }}" required="">
                    <div id="result" class="list-none hidden"></div>
                </div>
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
    <div class="mt-8 lg:mt-14 font-quicksand mx-5 sm:mx-auto">
        <h2 class="text-xl mb-5 lg:mb-8 font-semibold">Artikel Terbaru</h2>
        <div class="min-h-[75vh]">
            @if($artikels == NULL)
            <div class="text-center mx-auto mt-20">
                <img src="{{ asset('img/illustrations/empty.svg') }}" alt="" class="w-56 mx-auto block">
                <p class="text-sm font-medium mt-5">Belum ada artikel yang dapat ditampilkan. Tunggu artikel terbaru
                    kami ya!
                </p>
            </div>
            @else
            @foreach($artikels as $artikel)
            <a href="/artikel-berproses/{{ $artikel->id }}">
                <div class="sm:w-2/3 md:w-2/3 lg:w-2/3 grid grid-cols-3 gap-2 mb-8 lg:mb-10">
                    <div class="mr-3 lg:mr-3">
                        @if($artikel->poster == NULL)
                        <img src="{{ asset('img/illustrations/jumbotron-home.png' ) }}" alt=""
                            class="rounded-lg aspect-video h-full sm:h-full sm:w-full object-cover">
                        @else
                        <img src="{{ asset('https://ruangberproses-dev.site/storage/' . $artikel->poster ) }}" alt=""
                            class="rounded-lg aspect-video h-full sm:h-full sm:w-full object-cover">
                        @endif
                    </div>
                    <div class="col-span-2">
                        <div class="col-span-2 self-end font-semibold text-lg line-clamp-1">{{ $artikel->judul }}</div>
                        <div
                            class="row-span-2 col-span-2 text-base xs:line-clamp-3 lg:line-clamp-3 md:line-clamp-2 sm:line-clamp-3">
                            {!! $artikel->isi !!}
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            <div class="flex flex-col items-center my-10">
                <!-- Help text -->
                <span class="text-sm text-gray-700 dark:text-gray-400">
                    Showing Page <span
                        class="font-semibold text-gray-900 dark:text-white">{{$page->current_page}}</span>
                </span>
                <div class="inline-flex mt-2 xs:mt-0">
                    @if($page->last_page > 1)
                    @if($page->current_page == 1)
                    <a href="#"
                        class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Previous
                    </a>
                    @else
                    <a href="/artikel-berproses?page={{$page->current_page - 1}}"
                        class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Previous
                    </a>
                    @endif
                    @if($page->current_page == $page->last_page)
                    <a href="/artikel-berproses?page={{$page->last_page}}"
                        class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    @else
                    <a href="/artikel-berproses?page={{$page->current_page + 1}}"
                        class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    @endif
                    @endif
                </div>
                @endif
            </div>
        </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/autocomplete-search.js') }}"></script>
@endpush