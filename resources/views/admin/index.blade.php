@extends('layout.admin-dashboard')

@section('content')

<body class="flex bg-gray-100 min-h-screen font-quicksand overflow-hidden" x-data="{panel:false, menu:true}">
    <aside class="flex flex-col" :class="{'hidden sm:flex sm:flex-col': window.outerWidth > 768}">
        <a href="#"
            class="inline-flex items-center justify-center h-20 w-full bg-gray-800 hover:bg-gray-800 focus:bg-gray-800">
            <img src="{{ asset('img/ruang-berproses/rb-only-logo.png') }}" alt="Logo Ruang Berproses"
                class="h-12 w-auto">
        </a>
        <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
            <nav class="flex flex-col mx-4 my-6 space-y-4 text-sm">
                <ul id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li role="presentation">
                        <a href="#" id="screening-tab" data-tabs-target="#screening" type="button" role="tab"
                            aria-controls="screening" aria-selected="true"
                            class="inline-flex items-center py-3 rounded-lg px-2 active:text-blue-600 active:bg-white focus:text-blue-600 focus:bg-white"
                            :class="{'justify-start': menu, 'justify-center': menu == false}">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            <span class="ml-2" x-show="menu">Screening</span>
                        </a>
                    </li>
                    <h3 class="uppercase text-xs text-gray-400 mb-2 mt-3 font-bold" x-show="menu">Layanan</h3>
                    <div class="border-gray-700 h-15 w-full border-t"></div>
                    <li role="presentation">
                        <a href="#" id="proCounseling-tab" data-tabs-target="#proCounseling" type="button" role="tab"
                            aria-controls="proCounseling" aria-selected="false"
                            class="inline-flex items-center py-3 active:text-blue-600 active:bg-white focus:text-blue-600 focus:bg-white rounded-lg px-2"
                            :class="{'justify-start': menu, 'justify-center': menu == false}">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <span class="ml-2" x-show="menu">Professional<br>Counseling</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" id="peerCounseling-tab" data-tabs-target="#peerCounseling" type="button" role="tab"
                            aria-controls="peerCounseling" aria-selected="false"
                            class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 active:text-blue-600 active:bg-white focus:text-blue-600 focus:bg-white rounded px-2"
                            :class="{'justify-start': menu, 'justify-center': menu == false}">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-2" x-show="menu">Peer<br>Counseling</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" id="supportGroup-tab" data-tabs-target="#supportGroup" type="button" role="tab"
                            aria-controls="supportGroup" aria-selected="false"
                            class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 active:text-blue-600 active:bg-white focus:text-blue-600 focus:bg-white rounded-lg px-2"
                            :class="{'justify-start': menu, 'justify-center': menu == false}">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-2" x-show="menu">Support<br>Group</span>
                        </a>
                    </li>
                    <h3 class="uppercase text-xs text-gray-400 mt-4 mb-3 font-bold" x-show="menu">Program</h3>
                    <div class="border-gray-700 h-15 w-full border-t"></div>
                    <li role="presentation">
                        <a href="#" id="psytalk-tab" data-tabs-target="#psytalk" type="button" role="tab"
                            aria-controls="psytalk" aria-selected="false"
                            class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 active:text-blue-600 active:bg-white focus:text-blue-600 focus:bg-white rounded-lg px-2"
                            :class="{'justify-start': menu, 'justify-center': menu == false}">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-2" x-show="menu">PSYTALK</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" id="kb-tab" data-tabs-target="#kb" type="button" role="tab" aria-controls="kb"
                            aria-selected="false"
                            class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 active:text-blue-600 active:bg-white focus:text-blue-600 focus:bg-white rounded-lg px-2"
                            :class="{'justify-start': menu, 'justify-center': menu == false}">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-2" x-show="menu">Kelas<br>Berproses</span>
                        </a>
                    </li>
                    <div class="border-gray-700 h-15 w-full border-t mt-2"></div>
                    <li role="presentation">
                        <a href="#" id="artikel-tab" data-tabs-target="#artikel" type="button" role="tab"
                            aria-controls="artikel" aria-selected="false"
                            class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 active:text-blue-600 active:bg-white focus:text-blue-600 focus:bg-white rounded-lg px-2"
                            :class="{'justify-start': menu, 'justify-center': menu == false}">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-2" x-show="menu">Artikel</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="flex-grow text-gray-800">
        <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
            <div class="mr-8 cursor-pointer" @click="menu = !menu">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <!-- <div class="relative w-full max-w-md sm:-ml-2">
                <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                    class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
                <input type="text" role="search" placeholder="Search..."
                    class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
            </div> -->
            <div class="flex flex-shrink-0 items-center ml-auto">
                <button class="relative inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg"
                    @click="panel = !panel" @click.away="panel = false">
                    <span class="sr-only">User Menu</span>
                    <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
                        <span class="font-semibold">{{ session()->get('nama') }}</span>
                        @if(session()->get('role') == 1)
                        <span class="text-sm text-gray-600">Admin</span>
                        @endif
                    </div>
                    <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
                        @if(session()->get('foto_profil'))
                        @else
                        <img src="{{ asset('img/user/avatar.png') }}" alt="user profile photo"
                            class="h-full w-full object-cover">
                        @endif
                    </span>
                    <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                        class="hidden sm:block h-6 w-6 text-gray-300">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="absolute top-20 bg-white border rounded-md p-2 w-56" x-show="panel" style="display:none">
                    <div class="p-2 hover:bg-blue-100 cursor-pointer"><a href="/profil">Profil</a></div>
                    <div class="p-2 hover:bg-blue-100 cursor-pointer"><a href="/admin">Administrator</a></div>
                </div>
                <div class="border-l pl-3 ml-3 space-x-1">
                    <!-- <button
                        class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                        <span class="sr-only">Notifications</span>
                        <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
                        <span
                            class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button> -->
                    <form action="/logout" method="POST">
                        @csrf
                        <button
                            class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                            <span class="sr-only">Log out</span>
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </header>
        <main class="p-6 sm:p-10 space-y-6 max-h-screen overflow-y-auto" id="myTabContent">
            <div class="" id="screening" role="tabpanel" aria-labelledby="screening-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
                        <h2 class="text-gray-600 ml-0.5">Mobile UX/UI Design course</h2>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3">
                        <button
                            class="inline-flex px-5 py-3 text-blue-600 hover:text-blue-700 focus:text-blue-700 hover:bg-blue-100 focus:bg-blue-100 border border-blue-600 rounded-md mb-3">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                            Manage dashboard
                        </button>
                        <button
                            class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Tambah Data Pro
                        </button>
                    </div>
                </div>
                <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">62</span>
                            <span class="block text-gray-500">Students</span>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">6.8</span>
                            <span class="block text-gray-500">Average mark</span>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                            </svg>
                        </div>
                        <div>
                            <span class="inline-block text-2xl font-bold">9</span>
                            <span class="inline-block text-xl text-gray-500 font-semibold">(14%)</span>
                            <span class="block text-gray-500">Underperforming students</span>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">83%</span>
                            <span class="block text-gray-500">Finished homeworks</span>
                        </div>
                    </div>
                </section>
                <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6">
                    <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">
                        <div class="px-6 py-5 font-semibold border-b border-gray-100">The number of applied and left
                            students per month</div>
                        <div class="p-4 flex-grow">
                            <div
                                class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                                Chart</div>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path fill="#fff"
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">25</span>
                            <span class="block text-gray-500">Lections left</span>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">139</span>
                            <span class="block text-gray-500">Hours spent on lections</span>
                        </div>
                    </div>
                    <div class="row-span-3 bg-white shadow rounded-lg">
                        <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
                            <span>Students by average mark</span>
                            <button type="button"
                                class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600"
                                id="options-menu" aria-haspopup="true" aria-expanded="true">
                                Descending
                                <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
                        </div>
                        <div class="overflow-y-auto" style="max-height: 24rem;">
                            <ul class="p-6 space-y-6">
                                <li class="flex items-center">
                                    <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                        <img src="https://randomuser.me/api/portraits/women/82.jpg"
                                            alt="Annette Watson profile picture">
                                    </div>
                                    <span class="text-gray-600">Annette Watson</span>
                                    <span class="ml-auto font-semibold">9.3</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                        <img src="https://randomuser.me/api/portraits/men/81.jpg"
                                            alt="Calvin Steward profile picture">
                                    </div>
                                    <span class="text-gray-600">Calvin Steward</span>
                                    <span class="ml-auto font-semibold">8.9</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                        <img src="https://randomuser.me/api/portraits/men/80.jpg"
                                            alt="Ralph Richards profile picture">
                                    </div>
                                    <span class="text-gray-600">Ralph Richards</span>
                                    <span class="ml-auto font-semibold">8.7</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                        <img src="https://randomuser.me/api/portraits/men/79.jpg"
                                            alt="Bernard Murphy profile picture">
                                    </div>
                                    <span class="text-gray-600">Bernard Murphy</span>
                                    <span class="ml-auto font-semibold">8.2</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                        <img src="https://randomuser.me/api/portraits/women/78.jpg"
                                            alt="Arlene Robertson profile picture">
                                    </div>
                                    <span class="text-gray-600">Arlene Robertson</span>
                                    <span class="ml-auto font-semibold">8.2</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                        <img src="https://randomuser.me/api/portraits/women/77.jpg"
                                            alt="Jane Lane profile picture">
                                    </div>
                                    <span class="text-gray-600">Jane Lane</span>
                                    <span class="ml-auto font-semibold">8.1</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                        <img src="https://randomuser.me/api/portraits/men/76.jpg"
                                            alt="Pat Mckinney profile picture">
                                    </div>
                                    <span class="text-gray-600">Pat Mckinney</span>
                                    <span class="ml-auto font-semibold">7.9</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                        <img src="https://randomuser.me/api/portraits/men/75.jpg"
                                            alt="Norman Walters profile picture">
                                    </div>
                                    <span class="text-gray-600">Norman Walters</span>
                                    <span class="ml-auto font-semibold">7.7</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col row-span-3 bg-white shadow rounded-lg">
                        <div class="px-6 py-5 font-semibold border-b border-gray-100">Students by type of studying</div>
                        <div class="p-4 flex-grow">
                            <div
                                class="flex items-center justify-center h-full px-4 py-24 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                                Chart</div>
                        </div>
                    </div>
                </section>
                <section class="text-right font-semibold text-gray-500">
                    <a href="#" class="text-blue-600 hover:underline">Recreated on Codepen</a> with <a
                        href="https://tailwindcss.com/" class="text-teal-400 hover:underline">Tailwind CSS</a> by Sinan
                    AYDOĞAN, <a
                        href="https://dribbble.com/shots/10711741-Free-UI-Kit-for-Figma-Online-Courses-Dashboard"
                        class="text-blue-600 hover:underline">original design</a> made by Chili Labs and <a
                        href="https://codepen.io/azrikahar/pen/abZzaga" class="text-blue-600 hover:underline"
                        target="_blank">abZzaga</a>
                </section>
            </div>
            <div class="" id="proCounseling" role="tabpanel" aria-labelledby="proCounseling-tab">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="pcSubTab"
                        data-tabs-toggle="#pcSubTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                                id="pcList-tab" data-tabs-target="#pcList" type="button" role="tab"
                                aria-controls="pcList" aria-selected="true">Daftar Konseling Tersedia</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                                id="pcReg-tab" data-tabs-target="#pcReg" type="button" role="tab" aria-controls="pcReg"
                                aria-selected="false">Data Pendaftaran</button>
                        </li>
                    </ul>
                </div>
                <div id="pcSubTabContent">
                    <div class="p-4 rounded-lg dark:bg-gray-800" id="pcList" role="tabpanel"
                        aria-labelledby="pcList-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">Professional Counseling</h1>
                                <h2 class="text-gray-600 ml-0.5">Konseling dengan psikolog professional</h2>
                            </div>
                            <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                                <button
                                    class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                        <section class="grid md:grid-cols-1">
                            <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search-users"
                                        class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search">
                                </div>
                            </div>
                            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="py-3 px-6">
                                                ID
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Nama Konselor
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Waktu
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Biaya
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($professionalcounselings == NULL)
                                        @else
                                        @foreach($professionalcounselings as $proc)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $proc->id}}</div>
                                            </th>
                                            <td class="py-4 px-6">
                                                {{ $proc->nama_konselor }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $proc->waktu }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $proc->biaya }}
                                            </td>
                                            <td class="py-4 px-6">
                                                <!-- Modal toggle -->
                                                <a href="#" type="button" data-modal-toggle="editpcListModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                                </a>
                                                <a href="#" type="button" data-modal-toggle="deletepcListModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <!-- Edit Pro Counseling List modal -->
                                <div id="editpcListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <form action="/admin/layanan/procounseling-list/{{ $proc->id }}" method="POST"
                                            enctype="multipart/form-data"
                                            class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            @method('put')
                                            @csrf
                                            <!-- Modal header -->
                                            <div
                                                class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Edit Data Konseling Tersedia
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="editpcListModal">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="nama_konselor"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                            Konselor</label>
                                                        <input type="text" name="nama_konselor" id="nama_konselor"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="{{ old('nama_konselor', $proc->nama_konselor) }}"
                                                            required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="waktu"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Waktu</label>
                                                        <input type="text" name="waktu" id="waktu"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="{{ old('waktu', $proc->waktu) }}" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="biaya"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                        <input type="text" name="biaya" id="biaya"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="{{ old('biaya', $proc->biaya) }}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                <button type="submit"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                                <!-- Delete Pro Counseling List modal -->
                                <div id="deletepcListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <form action="/admin/layanan/procounseling-list/{{ $proc->id }}" method="post"
                                            enctype="multipart/form-data"
                                            class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            @method('delete')
                                            @csrf
                                            <!-- Modal header -->
                                            <div
                                                class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Hapus Data Konseling
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="deletepcListModal">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6">
                                                <p>Data yang sudah dihapus tidak bisa dikembalikan lagi</p>
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                <button type="submit"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="pcReg" role="tabpanel"
                        aria-labelledby="pcReg-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                                <h2 class="text-gray-600 ml-0.5">Konseling dengan psikolog professional</h2>
                            </div>
                            <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                                <button
                                    class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                        <section class="grid md:grid-cols-1">
                            <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search-users"
                                        class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search">
                                </div>
                            </div>
                            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="py-3 px-6">
                                                ID
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                User ID
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Screening ID
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Bukti Transfer
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Status Pendaftaran
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($regprofessionalcounselings != NULL)
                                        @foreach($regprofessionalcounselings as $regproc)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $regproc->id}}</div>
                                            </th>
                                            <td class="py-4 px-6">
                                                {{ $regproc->user_id }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $regproc->screening_id }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $regproc->bukti_transfer }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $regproc->status_pendaftaran }}
                                            </td>
                                            <td class="py-4 px-6">
                                                <!-- Modal toggle -->
                                                <a href="#" type="button" data-modal-toggle="editpcRegModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <!-- Edit user modal -->
                                <div id="editpcRegModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Edit user
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="editpcRegModal">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="first-name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                                            Name</label>
                                                        <input type="text" name="first-name" id="first-name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Bonnie" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="last-name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                            Name</label>
                                                        <input type="text" name="last-name" id="last-name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Green" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="email"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="example@company.com" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="phone-number"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                            Number</label>
                                                        <input type="number" name="phone-number" id="phone-number"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="e.g. +(12)3456 789" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="department"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                                        <input type="text" name="department" id="department"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Development" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="company"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                                        <input type="number" name="company" id="company"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="123456" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="current-password"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                                                            Password</label>
                                                        <input type="password" name="current-password"
                                                            id="current-password"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="••••••••" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="new-password"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                                            Password</label>
                                                        <input type="password" name="new-password" id="new-password"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="••••••••" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                <button type="submit"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                                                    all</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <div class="" id="peerCounseling" role="tabpanel" aria-labelledby="peerCounseling-tab">
                Peer Counseling
            </div>
            <div class="" id="supportGroup" role="tabpanel" aria-labelledby="supportGroup-tab">
                Support Group
            </div>
            <div class="" id="psytalk" role="tabpanel" aria-labelledby="psytalk-tab">
                Psytalk
            </div>
            <div class="" id="kb" role="tabpanel" aria-labelledby="kb-tab">
                Kelas Berproses
            </div>
            <div class="" id="artikel" role="tabpanel" aria-labelledby="artikel-tab">
                Artikel
            </div>
        </main>
    </div>
    <script>
    feather.replace()
    </script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
@endsection