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
            <!-- SCREENING -->
            <div class="" id="screening" role="tabpanel" aria-labelledby="screening-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Screening</h1>
                        <h2 class="text-gray-600 ml-0.5">Data Screening Pre-pendaftaran Konseling</h2>
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
                                    @foreach($screening_variable as $sv)
                                    <th scope="col" class="py-3 px-6">
                                        {{ $sv }}
                                    </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @if($screenings == NULL)
                                @else
                                @foreach($screenings as $screening)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $screening->id}}</div>
                                    </th>
                                    @foreach($screening_variable as $sv)
                                    <td class="py-4 px-6">
                                        {{ $screening->$sv }}
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <!-- PROFFESSIONAL COUNSELING -->
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
                                            @foreach($counseling_fields as $csf)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $csf }}
                                            </th>
                                            @endforeach
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
                                            @foreach($counseling_fields as $csf)
                                            <td class="py-4 px-6">
                                                {{ $proc->$csf}}
                                            </td>
                                            @endforeach
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
                                        <form action="/admin/layanan/procounseling-list/" method="POST"
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
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="waktu"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Waktu</label>
                                                        <input type="text" name="waktu" id="waktu"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="biaya"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                        <input type="text" name="biaya" id="biaya"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
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
                                        <form action="/admin/layanan/procounseling-list/" method="post"
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
                    <!-- PROFESSIONAL COUNSELING REGISTRATION -->
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
                                            @foreach($regprocounseling_fields as $rprof)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $rprof }}
                                            </th>
                                            @endforeach
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
                                            @foreach($regprocounseling_fields as $rprof)
                                            <td class="py-4 px-6">
                                                {{ $regproc->rprof }}
                                            </td>
                                            @endforeach
                                            <td class="py-4 px-6">
                                                <!-- Modal toggle -->
                                                <a href="#" type="button" data-modal-toggle="editpcRegModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                                </a>
                                                <a href="#" type="button" data-modal-toggle="deletepcRegModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <!-- Edit professional counseling registration modal -->
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
            <!-- PEER COUNSELING -->
            <div class="" id="peerCounseling" role="tabpanel" aria-labelledby="peerCounseling-tab">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="pecSubTab"
                        data-tabs-toggle="#pecSubTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                                id="pecList-tab" data-tabs-target="#pecList" type="button" role="tab"
                                aria-controls="pecList" aria-selected="true">Daftar Konseling Tersedia</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                                id="pecReg-tab" data-tabs-target="#pecReg" type="button" role="tab"
                                aria-controls="pecReg" aria-selected="false">Data Pendaftaran</button>
                        </li>
                    </ul>
                </div>
                <div id="pecSubTabContent">
                    <div class="p-4 rounded-lg dark:bg-gray-800" id="pecList" role="tabpanel"
                        aria-labelledby="pcList-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">Peer Counseling</h1>
                                <h2 class="text-gray-600 ml-0.5">Konseling dengan konselor sebaya</h2>
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
                                            @foreach($counseling_fields as $pef)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $pef }}
                                            </th>
                                            @endforeach
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($peercounselings == NULL)
                                        @else
                                        @foreach($peercounselings as $pec)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $proc->id}}</div>
                                            </th>
                                            @foreach($counseling_fields as $pef)
                                            <td class="py-4 px-6">
                                                {{ $pec->pef }}
                                            </td>
                                            @endforeach
                                            <td class="py-4 px-6">
                                                <!-- Modal toggle -->
                                                <a href="#" type="button" data-modal-toggle="editpecListModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                                </a>
                                                <a href="#" type="button" data-modal-toggle="deletepecListModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <!-- Edit Peer Counseling List modal -->
                                <div id="editpecListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <form action="/admin/layanan/procounseling-list/" method="POST"
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
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="waktu"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Waktu</label>
                                                        <input type="text" name="waktu" id="waktu"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="biaya"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                        <input type="text" name="biaya" id="biaya"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
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
                                <!-- Delete Peer Counseling List modal -->
                                <div id="deletepecListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <form action="/admin/layanan/procounseling-list/" method="post"
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
                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="pecReg" role="tabpanel"
                        aria-labelledby="pecReg-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                                <h2 class="text-gray-600 ml-0.5">Konseling dengan konselor sebaya</h2>
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
                                            @foreach($regpeercounseling_fields as $rpecf)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $rpecf }}
                                            </th>
                                            @endforeach
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($regpeercounselings != NULL)
                                        @foreach($regpeercounselings as $regpec)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $regproc->id}}</div>
                                            </th>
                                            @foreach($regpeercounseling_fields as $rpecf)
                                            <td class="py-4 px-6">
                                                {{ $regpec->rpecf }}
                                            </td>
                                            @endforeach
                                            <td class="py-4 px-6">
                                                <!-- Modal toggle -->
                                                <a href="#" type="button" data-modal-toggle="editpecRegModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <!-- Edit user modal -->
                                <div id="editpecRegModal" tabindex="-1" aria-hidden="true"
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
            <!-- SUPPORT GROUP -->
            <div class="" id="supportGroup" role="tabpanel" aria-labelledby="supportGroup-tab">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="sgSubTab"
                        data-tabs-toggle="#sgSubTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                                id="sgList-tab" data-tabs-target="#sgList" type="button" role="tab"
                                aria-controls="sgList" aria-selected="true">Daftar Konseling Tersedia</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                                id="sgReg-tab" data-tabs-target="#sgReg" type="button" role="tab" aria-controls="sgReg"
                                aria-selected="false">Data Pendaftaran</button>
                        </li>
                    </ul>
                </div>
                <div id="sgSubTabContent">
                    <div class="p-4 rounded-lg dark:bg-gray-800" id="sgList" role="tabpanel"
                        aria-labelledby="sgList-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">Support Group</h1>
                                <h2 class="text-gray-600 ml-0.5">Daftar Support Group Tersedia</h2>
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
                                            @foreach($sg_fields as $sgf)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $sgf }}
                                            </th>
                                            @endforeach
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($supportgroups == NULL)
                                        @else
                                        @foreach($supportgroups as $sg)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $sg->id }}</div>
                                            </th>
                                            @foreach($sg_fields as $sgf)
                                            <td class="py-4 px-6">
                                                {{ $sg->$sgf }}
                                            </td>
                                            @endforeach
                                            <td class="py-4 px-6">
                                                <!-- Modal toggle -->
                                                <a href="#" type="button" data-modal-toggle="editsgListModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                                </a>
                                                <a href="#" type="button" data-modal-toggle="deletesgListModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <!-- Edit Pro Counseling List modal -->
                                <div id="editsgListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <form action="/admin/layanan/procounseling-list/" method="POST"
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
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="waktu"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Waktu</label>
                                                        <input type="text" name="waktu" id="waktu"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="biaya"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                        <input type="text" name="biaya" id="biaya"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
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
                                <!-- Delete Support Group List modal -->
                                <div id="deletesgListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <form action="/admin/layanan/procounseling-list" method="post"
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
                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="sgReg" role="tabpanel"
                        aria-labelledby="sgReg-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                                <h2 class="text-gray-600 ml-0.5">Kelompok dukungan</h2>
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
                                            @foreach($regsg_fields as $rsgf)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $rsgf }}
                                            </th>
                                            @endforeach
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($regsupportgroups != NULL)
                                        @foreach($regsupportgroups as $regsg)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $regproc->id}}</div>
                                            </th>
                                            @foreach($regsg_fields as $rsgf)
                                            <td class="py-4 px-6">
                                                {{ $regsg->rsgf }}
                                            </td>
                                            @endforeach
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
                                <div id="editsgRegModal" tabindex="-1" aria-hidden="true"
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
            <div class="" id="psytalk" role="tabpanel" aria-labelledby="psytalk-tab">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="pcSubTab"
                        data-tabs-toggle="#psySubTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                                id="psyList-tab" data-tabs-target="#psyList" type="button" role="tab"
                                aria-controls="pcList" aria-selected="true">Daftar Psytalk Tersedia</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                                id="psyReg-tab" data-tabs-target="#psyReg" type="button" role="tab"
                                aria-controls="psyReg" aria-selected="false">Data Pendaftaran</button>
                        </li>
                    </ul>
                </div>
                <div id="psySubTabContent">
                    <div class="p-4 rounded-lg dark:bg-gray-800" id="psyList" role="tabpanel"
                        aria-labelledby="psyList-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">PSYTALK</h1>
                                <h2 class="text-gray-600 ml-0.5">Daftar PSYTALK Tersedia</h2>
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
                                            @foreach($program_fields as $psyf)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $psyf }}
                                            </th>
                                            @endforeach
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($psytalks == NULL)
                                        @else
                                        @foreach($psytalks as $psytalk)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $proc->id}}</div>
                                            </th>
                                            @foreach($program_fields as $psyf)
                                            <td class="py-4 px-6">
                                                {{ $psytalk->psyf }}
                                            </td>
                                            @endforeach
                                            <td class="py-4 px-6">
                                                <!-- Modal toggle -->
                                                <a href="#" type="button" data-modal-toggle="editpsyListModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                                </a>
                                                <a href="#" type="button" data-modal-toggle="deletepsyListModal"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <!-- Edit Pro Counseling List modal -->
                                <div id="editpsyListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <form action="/admin/layanan/procounseling-list/" method="POST"
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
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="waktu"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Waktu</label>
                                                        <input type="text" name="waktu" id="waktu"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="biaya"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                        <input type="text" name="biaya" id="biaya"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
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
                                <div id="deletepsyListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <form action="/admin/layanan/procounseling-list/" method="post"
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
                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="psyReg" role="tabpanel"
                        aria-labelledby="psyReg-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                                <h2 class="text-gray-600 ml-0.5">Webinar Psikologi</h2>
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
                                            @foreach($regpsytalk_fields as $rpsyf)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $rpsyf }}
                                            </th>
                                            @endforeach
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($regpsytalks != NULL)
                                        @foreach($regpsytalks as $regpsytalk)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $regproc->id}}</div>
                                            </th>
                                            @foreach($program_fields as $psyf)
                                            <td class="py-4 px-6">
                                                {{ $regpsytalk->psyf }}
                                            </td>
                                            @endforeach
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
                                <div id="editpsyRegModal" tabindex="-1" aria-hidden="true"
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
            <!-- KELAS BERPROSES -->
            <div class="" id="kb" role="tabpanel" aria-labelledby="kb-tab">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="kbSubTab"
                        data-tabs-toggle="#kbSubTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                                id="kbList-tab" data-tabs-target="#kbList" type="button" role="tab"
                                aria-controls="kbList" aria-selected="true">Daftar Kelas Berproses Tersedia</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                                id="kbReg-tab" data-tabs-target="#kbReg" type="button" role="tab" aria-controls="kbReg"
                                aria-selected="false">Data Pendaftaran</button>
                        </li>
                    </ul>
                </div>
                <div id="kbSubTabContent">
                    <div class="p-4 rounded-lg dark:bg-gray-800" id="kbList" role="tabpanel"
                        aria-labelledby="kbList-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">Kelas Berproses</h1>
                                <h2 class="text-gray-600 ml-0.5">Pelatihan psikologi</h2>
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
                                            @foreach($program_fields as $kbf)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $kbf }}
                                            </th>
                                            @endforeach
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($kbs == NULL)
                                        @else
                                        @foreach($kbs as $kb)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $kb->id}}</div>
                                            </th>
                                            @foreach($kb_fields as $kbf)
                                            <td class="py-4 px-6">
                                                {{ $kb->kbf }}
                                            </td>
                                            @endforeach
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
                                <div id="editkbListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <form action="/admin/layanan/procounseling-list/" method="POST"
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
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="waktu"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Waktu</label>
                                                        <input type="text" name="waktu" id="waktu"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="biaya"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                        <input type="text" name="biaya" id="biaya"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            value="" required="">
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
                                <!-- Delete Kelas Berproses List modal -->
                                <div id="deletekbListModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                                        <form action="/admin/layanan/procounseling-list/" method="post"
                                            enctype="multipart/form-data"
                                            class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            @method('delete')
                                            @csrf
                                            <!-- Modal header -->
                                            <div
                                                class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Hapus Data Kelas Berproses
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
                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="kbReg" role="tabpanel"
                        aria-labelledby="kbReg-tab">
                        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                            <div class="mr-6">
                                <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                                <h2 class="text-gray-600 ml-0.5">Kelas Berproses</h2>
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
                                            @foreach($regkb_fields as $rkbf)
                                            <th scope="col" class="py-3 px-6">
                                                {{ $rkbf }}
                                            </th>
                                            @endforeach
                                            <th scope="col" class="py-3 px-6">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($regkbs != NULL)
                                        @foreach($regkbs as $regkb)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="text-base font-semibold">{{ $regproc->id}}</div>
                                            </th>
                                            @foreach($regkb_fields as $rkbf)
                                            <td class="py-4 px-6">
                                                {{ $regkb->rkbf }}
                                            </td>
                                            @endforeach
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
                                <div id="editkbRegModal" tabindex="-1" aria-hidden="true"
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
            <div class="" id="artikel" role="tabpanel" aria-labelledby="artikel-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Artikel</h1>
                        <h2 class="text-gray-600 ml-0.5">Data Artikel</h2>
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
                                        Judul
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Isi
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Poster
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($artikels == NULL)
                                @else
                                @foreach($artikels as $artikel)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $artikel->id}}</div>
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $artikel->user_id }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $artikel->judul }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $artikel->isi }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $artikel->poster }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle="editartikelModal"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a>
                                        <a href="#" type="button" data-modal-toggle="deleteartikelModal"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <!-- Edit Pro Counseling List modal -->
                        <div id="editartikelModal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <form action="" method="POST" enctype="multipart/form-data"
                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    @method('put')
                                    @csrf
                                    <!-- Modal header -->
                                    <div
                                        class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Edit Data Screening
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
                                                <label for="judul"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                                                <input type="text" name="judul" id="judul"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    value="" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="isi"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi</label>
                                                <input type="text" name="isi" id="isi"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    value="" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="poster"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poster</label>
                                                <input type="file" name="poster" id="poster"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    value="" required="">
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
                        <div id="deletepartikelModal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative w-full max-w-2xl h-full md:h-auto">
                                <form action="" method="post" enctype="multipart/form-data"
                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    @method('delete')
                                    @csrf
                                    <!-- Modal header -->
                                    <div
                                        class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Hapus Data Artikel
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
        </main>
    </div>
    <script>
    feather.replace()
    </script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
@endsection