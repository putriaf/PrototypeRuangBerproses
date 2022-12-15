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

.faq {
    color: black;
}

.faq button {
    background-color: #FB8D6650;
}

.faq button:focus {
    font-weight: 700;
}

.faq .answer {
    background-color: #ffffff80;
    font-weight: 500;
}
</style>
@endpush

@section('content')
<section class="mt-20 lg:mt-28">
    <div class="mx-auto font-quicksand text-center mb-8 lg:mb-12">
        <h1 class="text-3xl font-bold mb-3">PSYTALK</h1>
        <p class="text-md">Webinar edukasi psikologi</p>
    </div>
    @if($psytalks == NULL)
    <div class="text-center mx-auto mt-24 mb-16">
        <img src="{{ asset('img/illustrations/empty.svg') }}" alt="" class="w-56 mx-auto block">
        <p class="text-sm font-medium mt-5">Nantikan webinar terbaru bersama kami ya, Sahabat Berproses!
        </p>
    </div>
    @else
    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 lg:gap-16 mb-5 xs:mx-5 lg:mx-56 sm:mx-5 md:mx-16 lg:mb-8">
        @foreach($psytalks as $psytalk)
        <div
            class="max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 font-montserrat">
            <a href="#">
                <img class="rounded-t-lg object-fill" src="{{ asset('storage/' . $psytalk->poster) }}" alt="">
            </a>
            <div class="px-4 sm:px-8 py-5">
                <a href="#">
                    <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $psytalk->topik }}
                    </h5>
                </a>
                <ul class="mb-6 text-sm">
                    <li class="mb-2">
                        <svg class="w-5 h-5 inline mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        {{ $psytalk->tanggal }}
                    </li>
                    <li class="mb-2">
                        <svg class="w-5 h-5 inline mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $psytalk->waktu }}
                    </li>
                    <li class="mb-2">
                        <svg class="w-5 h-5 inline mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                            </path>
                        </svg>
                        Rp{{ $psytalk->biaya }}
                    </li>
                </ul>
                <a href="/program/psytalk/{{ $psytalk->id }}/daftar"
                    class="mx-6 sm:mx-16 block text-sm sm:text-base items-center py-2 font-medium text-center text-white bg-[#FB8D66] rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Daftar
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="flex flex-col items-center my-10">
        <span class="text-sm text-gray-700 dark:text-gray-400">
            Showing Page <span class="font-semibold text-gray-900 dark:text-white">{{$page->current_page}}</span>
        </span>
        <div class="inline-flex mt-2 xs:mt-0">
            @if($page->last_page > 1)
            @if($page->current_page == 1)
            <a href="#"
                class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                Previous
            </a>
            @else
            <a href="/program/psytalk?page={{$page->current_page - 1}}"
                class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                Previous
            </a>
            @endif
            @if($page->current_page == $page->last_page)
            <a href="/program/psytalk?page={{$page->last_page}}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            @else
            <a href="/program/psytalk?page={{$page->current_page + 1}}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            @endif
            @endif
        </div>
    </div>
    @endif
    <div class="lg:p-20 px-5 py-14 bg-pale-yellow faq font-quicksand">
        <h3 class="font-semibold text-xl mb-8 text-center">Pertanyaan Sahabat Berproses</h3>
        <div id="accordion-collapse" data-accordion="collapse" class="lg:px-20">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 bg-pale-orange text-gray-900"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span>Apa perbedaan konseling professional dan konseling dengan konselor sebaya (peer
                        counseling)?</span>
                    <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="text-gray-800 answer"
                aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 font-medium border border-b-0 border-gray-200">
                    <p class="mb-2">
                        Perbedaannya yaitu:
                    <ol>
                        <li>Konseling profesional merupakan layanan konseling secara virtual yang dilakukan oleh para
                            associate psychologist di Ruang Berproses yang berkompeten sesuai dengan ranah atau
                            bidangnya masing-masing, seperti ranah klinis dewasa, klinis anak, pendidikan, serta
                            industri dan organisasi.
                        </li>
                        <li>Peer counselor merupakan tenaga terlatih konseling yang siap untuk menjadi pendengar dan
                            membantu menemukan solusi dalam masalah atau isu kesehatan mental non-klinis dengan tetap
                            menjaga kerahasiaan dan berada di bawah supervisi profesional.</li>
                    </ol>
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 "
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                    <span>Apakah semua layanan konseling Ruang Berproses gratis?</span>
                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden answer" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 font-medium border border-b-0 border-gray-200">
                    <p class="mb-2">Apabila kamu ingin berkonsultasi dengan peer
                        counselor, layanan ini tidak dipungut biaya. Akan tetapi, apabila kamu ingin berkonsultasi
                        dengan associate psychologist, maka klien akan dikenakan biaya sebesar Rp100.000/sesi. Kedua
                        layanan ini dilakukan secara virtual.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span>Bagaimana cara mendaftarnya?</span>
                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden answer" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 font-medium border border-t-0 border-gray-200">
                    <p class="mb-2">Kamu dapat melihat website atau media sosial Ruang
                        Berproses lainnya, kemudian daftarkan diri dengan mengisi data diri serta permasalahan yang
                        sedang dihadapi. Selanjutnya, data ini akan diproses oleh tim untuk pelaksanaan konselingnya.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection