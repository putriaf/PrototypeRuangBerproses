<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Berproses</title>
    <link rel="icon"
        href="{{ asset('https://ruangberproses-dev.herokuapp.com/img/ruang-berproses/rb-only-logo.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-page.css') }}" rel="stylesheet">
    <link href="{{ asset('https://ruangberproses-dev.herokuapp.com/css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
    ::-webkit-scrollbar {
        display: none;
    }

    main {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
    </style>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }

    .trix-button-group button {
        background-color: white;
    }

    trix-editor {
        background-color: white;
        color: black;
    }

    .container .form-group {
        margin-bottom: 20px;
    }

    .container h4 {
        margin-top: 20px;
    }
    </style>
    @stack('styles')
</head>

<body class="flex bg-gray-100 min-h-screen font-quicksand overflow-hidden" x-data="{panel:false, menu:true}">
    @if(session()->get('role') == 1)
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
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
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
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <polyline points="14 2 14 8 20 8" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <line x1="9" y1="15" x2="15" y2="15" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
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
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
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
                                <polygon points="23 7 16 12 23 17 23 7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
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
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
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
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
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
                        @if(session()->get('role') == 1)
                        <span class="text-sm text-gray-600">Hi, {{ session()->get('nama') }}</span>
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
                    <div class="p-2 hover:bg-blue-100 cursor-pointer"><a href="/profile">Profil</a></div>
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

        @yield('content')
        @else
        <p class="mx-3 my-3">Anda tidak mempunyai akses ke halaman admin.</p>
        @endif
    </div>
</body>

<script>
feather.replace()
</script>
<script>
const status = document.getElementById("status_pendaftaran");
const status_val = document.getElementById("status_pendaftaran").value;
const waktu_fix = document.getElementById("waktu_fix");

status.oninput = function() {
    if (status_val == "gagal") {
        waktu_fix.classList.add("hidden");
    }
};
</script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

</html>