@extends('layout.layout')

<!--  Hero -->
@section('content')
<section class="font-quicksand">
    <div
        class="pt-48 sm:px-12 h-screen bg-jumbotron-home bg-no-repeat bg-cover bg-center bg-fixed mx-auto text-center text-slate-100 xl:px-64">
        <h1 class="font-bold text-3xl sm:text-4xl md:text-5xl mb-3 sm:mb-4" style="line-height: 1.2">Solusi Terbaik
            Kembalikan Senyum Bahagiamu</h1>
        <h2 class="font-light text-sm sm:text-md px-8 sm:px-6 mb-6 sm:mb-10 lg:px-16 leading-relaxed">Butuh ruang aman
            dan
            nyaman untuk bercerita? Tenaga profesional siap mendampingimu berproses menuju versi terbaik!</h2>
        <a href="/layanan/professional-counseling"
            class="block bg-gradient-to-r from-[#FB8D66] mx-8 py-2 sm:mx-10 sm:py-4 lg:mx-64 rounded-3xl font-semibold lg:mt-8 hover:scale-90 transition-all ease-out duration-100 delay-150 hover:bg-gradient-to-r hover:from-[#EB6536]">Daftar
            Sekarang</a>
    </div>
    <div class=" bg-[#FAFAF2] py-20">
        <div class="mx-auto text-center">
            <h3 class="lg:text-2xl md:text-xl font-semibold lg:mb-2">Gabung Bersama Sahabat Berproses Lainnya</h3>
            <p class="lg:text-md">Bicarakan apa yang menjadi beban, lepas semua penat, dan urai pikiran kusutmu</p>
        </div>
        <div class="container grid grid-cols-3 gap-3 text-center mx-auto lg:px-40 lg:pt-10">
            <div class="items-center">
                <img src="{{ asset('img/illustrations/usp-1.png') }}" alt="" srcset="" class="mx-auto lg:w-24 lg:mb-4">
                <h4
                    class="lg:text-2xl font-bold hover:lg:text-3xl transition-all ease-in-out duration-1000 delay-200 hover:text-[#e64322]">
                    7000+</h4>
                <p class="lg:px-16 lg:mt-2">pengikut di sosial media</p>
            </div>
            <div class="items-center">
                <img src="{{ asset('img/illustrations/usp-2.png') }}" alt="" srcset="" class="mx-auto lg:w-24 lg:mb-4">
                <h4
                    class="lg:text-2xl font-bold hover:lg:text-3xl transition-all ease-in-out duration-1000 delay-200 hover:text-[#e64322]">
                    200+</h4>
                <p class="lg:px-16 lg:mt-2">total sesi konseling terlaksana</p>
            </div>
            <div class="items-center">
                <img src="{{ asset('img/illustrations/usp-3.png') }}" alt="" srcset="" class="mx-auto lg:w-24 lg:mb-4">
                <h4
                    class="lg:text-2xl font-bold hover:lg:text-3xl transition-all ease-in-out duration-1000 delay-200 hover:text-[#e64322]">
                    80+</h4>
                <p class="lg:px-16 lg:mt-2">total sesi edukasi psikologi terlaksana</p>
            </div>
        </div>
    </div>
    <div class="py-16 lg:px-16">
        <h3 class="lg:text-4xl lg:mb-2 font-semibold">Ruang Berproses berjanji</h3>
        <h3 class="lg:text-4xl font-semibold">untuk....</h3>
        <div class="container grid grid-cols-2 gap-20 place-items-center">
            <img src="{{ asset('img/illustrations/rb-promises.jpg') }}" alt="Empathy woman illustrations">
            <ul class="lg:text-2xl lg:pr-48 font-medium list-disc inline-block align-bottom space-y-2">
                <li>Mengurai pikiran kusutmu</li>
                <li>Menjadi ruang aman</li>
                <li>Memberikan motivasi untuk hidup yang lebih bahagia</li>
                <li>Mendengarkanmu seutuhnya</li>
                <li>Menjaga privasimu</li>
                <li>Mendampingimu hingga merasa lebih baik</li>
            </ul>
        </div>
    </div>
    <div class="bg-[#FAFAF2] py-20">
        <div class="mx-auto text-center">
            <h3 class="lg:text-2xl font-semibold lg:mb-2">Layanan Kami</h3>
            <p class="lg:text-md">Berbagai macam layanan tersedia untuk setiap kebutuhanmu</p>
            <div class="lg:mt-8">
                <a href=""
                    class="bg-pale-orange text-white font-semibold uppercase px-3 py-2 rounded-2xl lg:mr-7">Virtual
                    Support Group</a>
                <a href=""
                    class="bg-white text-slate-700 focus:bg-pale-orange focus:text-white font-semibold uppercase px-3 py-2 rounded-2xl lg:mr-7">Professional
                    Counseling</a>
                <a href=""
                    class="bg-white text-slate-700 focus:bg-pale-orange focus:text-white font-semibold uppercase px-3 py-2 rounded-2xl">Peer
                    Counseling</a>
            </div>
        </div>

        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                    data-carousel-item="">
                    <div class="container absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="grid grid-cols-3 gap-10 place-items-center lg:mx-28">
                            <img src="{{ asset('img/illustrations/virtual-support-group.jpg') }}"
                                class="rounded-full w-2/3 justify-self-end aspect-square" alt="Virtual Support Group">
                            <div class="col-span-2">
                                <h4 class="font-semibold text-lg lg:mb-3">Virtual Support Group</h4>
                                <p class="text-md lg:mb-6">Kamu gak sendiri! Banyak orang yang sedang atau pernah ada di
                                    posisimu. Ceritakan masalahmu dengan privasi terjamin.</p>
                                <a href="" class="lg:px-8 lg:py-2 rounded-xl bg-white font-medium">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10 active:z-20"
                    data-carousel-item="">
                    <div class="container absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="grid grid-cols-3 gap-10 place-items-center lg:mx-28">
                            <img src="{{ asset('img/illustrations/pro-counseling.jpg') }}"
                                class="rounded-full w-2/3 justify-self-end aspect-square object-cover"
                                alt="Professional Counseling">
                            <div class="col-span-2">
                                <h4 class="font-semibold text-lg lg:mb-3">Professional Counseling</h4>
                                <p class="text-md lg:mb-6">Layanan konseling online dengan psikolog professional untuk
                                    memahami permasalahan yang sedang dialami serta memberikanmu penanganan terbaik.</p>
                                <a href="" class="lg:px-8 lg:py-2 rounded-xl bg-white font-medium">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                    data-carousel-item="">
                    <div class="container absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="grid grid-cols-3 gap-10 place-items-center lg:mx-28">
                            <img src="{{ asset('img/illustrations/peer-counseling.jpg') }}"
                                class="rounded-full w-2/3 justify-self-end aspect-square object-cover"
                                alt="Peer Counseling">
                            <div class="col-span-2">
                                <h4 class="font-semibold text-lg lg:mb-3">Peer Counseling</h4>
                                <p class="text-md lg:mb-6">Layanan konseling dengan konselor sebaya terlatih untuk
                                    menangani kasus kondisi kesehatan mental non klinis. Tenang aja, layanan ini free!
                                </p>
                                <a href="" class="lg:px-8 lg:py-2 rounded-xl bg-white font-medium">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true"
                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <div class="py-20">
        <div class="mx-auto text-center">
            <h3 class="lg:text-2xl font-semibold lg:mb-2">Kata Mereka</h3>
        </div>
    </div>
    <div class="pt-20">
        <div class="mx-auto text-center mb-14">
            <h3 class="lg:text-2xl font-semibold">Artikel Berproses</h3>
        </div>
        <div class="grid grid-cols-2 lg:mx-20">
            <div class="grid grid-cols-3 lg:mb-10 gap-4">
                <div class="lg:mr-3">
                    <img src="{{ asset('img/illustrations/jumbotron-home.png' ) }}" alt=""
                        class="rounded-lg h-full w-full object-cover aspect-video">
                </div>
                <div class="col-span-2">
                    <div class="col-span-2 self-end font-semibold text-lg">Judul Artikel</div>
                    <div class="row-span-2 col-span-2 text-base">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Sequi delectus quod deserunt aperiamre inventore?</div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 lg:mb-10">
                <div class="lg:mr-3">
                    <img src="{{ asset('img/illustrations/virtual-support-group.jpg' ) }}" alt=""
                        class="rounded-lg h-full w-full object-cover aspect-video">
                </div>
                <div class="col-span-2">
                    <div class="col-span-2 self-end font-semibold text-lg">Judul Artikel</div>
                    <div class="row-span-2 col-span-2 text-base">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Sequi delectus quod deserunt aperiamre inventore?</div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 lg:mb-10">
                <div class="lg:mr-3">
                    <img src="{{ asset('img/illustrations/peer-counseling.jpg' ) }}" alt=""
                        class="rounded-lg h-full w-full object-cover aspect-video">
                </div>
                <div class="col-span-2">
                    <div class="col-span-2 self-end font-semibold text-lg">Judul Artikel</div>
                    <div class="row-span-2 col-span-2 text-base">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Sequi delectus quod deserunt aperiamre inventore?</div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 lg:mb-10">
                <div class="lg:mr-3">
                    <img src="{{ asset('img/illustrations/pro-counseling.jpg' ) }}" alt=""
                        class="rounded-lg h-full w-full object-cover aspect-video">
                </div>
                <div class="col-span-2">
                    <div class="col-span-2 self-end font-semibold text-lg">Judul Artikel</div>
                    <div class="row-span-2 col-span-2 text-base">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Sequi delectus quod deserunt aperiamre inventore?</div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="" class="bg-white text-black border-black border-[1px] lg:px-4 lg:py-2 rounded-lg">Lihat
                Selengkapnya</a>
        </div>
    </div>
    <div class="py-20">
        <div class="mx-auto text-center">
            <h3 class="lg:text-2xl font-semibold lg:mb-2">Klien Kami</h3>
        </div>
    </div>
</section>
@endsection