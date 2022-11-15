@extends('layout.layout')

@push('styles')
<link href="{{ asset('css/slick-carousel.css') }}" rel="stylesheet">

<style>
.shadow-effect {
    background: #fff;
    padding: 20px;
    border-radius: 4px;
    text-align: center;
    border: 1px solid #ECECEC;
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.10), 0 15px 12px rgba(0, 0, 0, 0.02);
}

#customers-testimonials .shadow-effect p {
    font-family: inherit;
    font-size: 17px;
    line-height: 1.5;
    margin: 0 0 17px 0;
    font-weight: 300;
}

.testimonial-name {
    margin: -17px auto 0;
    display: table;
    width: auto;
    background: #3190E7;
    padding: 9px 35px;
    border-radius: 12px;
    text-align: center;
    color: #fff;
    box-shadow: 0 9px 18px rgba(0, 0, 0, 0.12), 0 5px 7px rgba(0, 0, 0, 0.05);
}

#customers-testimonials .item {
    text-align: center;
    padding: 50px;
    margin-bottom: 80px;
    opacity: .2;
    -webkit-transform: scale3d(0.8, 0.8, 1);
    transform: scale3d(0.8, 0.8, 1);
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

#customers-testimonials .owl-item.active.center .item {
    opacity: 1;
    -webkit-transform: scale3d(1.0, 1.0, 1);
    transform: scale3d(1.0, 1.0, 1);
}

.owl-carousel .owl-item img {
    transform-style: preserve-3d;
    max-width: 90px;
    margin: 0 auto 17px;
}

#customers-testimonials.owl-carousel .owl-dots .owl-dot.active span,
#customers-testimonials.owl-carousel .owl-dots .owl-dot:hover span {
    background: #3190E7;
    transform: translate3d(0px, -50%, 0px) scale(0.7);
}

#customers-testimonials.owl-carousel .owl-dots {
    display: inline-block;
    width: 100%;
    text-align: center;
}

#customers-testimonials.owl-carousel .owl-dots .owl-dot {
    display: inline-block;
}

#customers-testimonials.owl-carousel .owl-dots .owl-dot span {
    background: #3190E7;
    display: inline-block;
    height: 20px;
    margin: 0 2px 5px;
    transform: translate3d(0px, -50%, 0px) scale(0.3);
    transform-origin: 50% 50% 0;
    transition: all 250ms ease-out 0s;
    width: 20px;
}
</style>
@endpush

<!--  Hero -->
@section('content')
<section class="font-quicksand">
    <div
        class="lg:pt-80 sm:pt-48 sm:px-12 h-screen bg-jumbotron-home bg-no-repeat bg-cover bg-center bg-fixed mx-auto text-center text-slate-100 xl:px-64">
        <h1 class="font-bold text-3xl sm:text-4xl md:text-4xl mb-3 sm:mb-4" style="line-height: 1.2">Solusi Terbaik
            Kembalikan Senyum Bahagiamu</h1>
        <h2 class="font-light text-sm sm:text-md px-8 sm:px-6 mb-6 sm:mb-10 lg:px-16 leading-relaxed">Butuh ruang aman
            dan
            nyaman untuk bercerita? Tenaga profesional siap mendampingimu berproses menuju versi terbaik!</h2>
        <a href="/layanan/professional-counseling"
            class="block bg-gradient-to-r from-[#FB8D66] mx-32 sm:mx-28 py-2 sm:py-4 lg:mx-64 rounded-3xl font-semibold lg:mt-8 hover:scale-90 transition-all ease-out duration-100 delay-150 hover:bg-gradient-to-r hover:from-[#EB6536]">Daftar
            Sekarang</a>
    </div>
    <div class=" bg-[#FAFAF2] py-20">
        <div class="mx-auto text-center">
            <h3 class="lg:text-2xl md:text-xl font-semibold lg:mb-2 sm:mb-2 mb-2">Gabung Bersama Sahabat Berproses
                Lainnya
            </h3>
            <p class="lg:text-md mx-4 sm:mx-6 sm:text-sm text-sm">Bicarakan apa yang menjadi beban, lepas semua penat,
                dan
                urai
                pikiran kusutmu
            </p>
        </div>
        <div class="container grid grid-cols-3 gap-3 text-center mx-auto lg:px-40 lg:pt-10 sm:px-10 sm:pt-8 pt-8">
            <div class="items-center">
                <img src="{{ asset('img/illustrations/usp-1.png') }}" alt="" srcset=""
                    class="mx-auto lg:w-24 lg:mb-4 sm:w-20 sm:mb-4 mb-4 w-24">
                <h4
                    class="lg:text-2xl font-bold hover:lg:text-3xl transition-all ease-in-out duration-1000 delay-200 hover:text-[#e64322]">
                    7000+</h4>
                <p class="lg:px-16 sm:px-5 px-5 lg:mt-2 text-sm">pengikut di sosial media</p>
            </div>
            <div class="items-center">
                <img src="{{ asset('img/illustrations/usp-2.png') }}" alt="" srcset=""
                    class="mx-auto lg:w-24 lg:mb-4 sm:w-20 sm:mb-4 mb-4 w-24">
                <h4
                    class="lg:text-2xl font-bold hover:lg:text-3xl transition-all ease-in-out duration-1000 delay-200 hover:text-[#e64322]">
                    200+</h4>
                <p class="lg:px-16 lg:mt-2 text-sm">total sesi konseling terlaksana</p>
            </div>
            <div class="items-center">
                <img src="{{ asset('img/illustrations/usp-3.png') }}" alt="" srcset=""
                    class="mx-auto lg:w-24 lg:mb-4 sm:w-20 sm:mb-4 mb-4 w-24">
                <h4
                    class="lg:text-2xl font-bold hover:lg:text-3xl transition-all ease-in-out duration-1000 delay-200 hover:text-[#e64322]">
                    80+</h4>
                <p class="lg:px-16 lg:mt-2 text-sm">total sesi edukasi psikologi terlaksana</p>
            </div>
        </div>
    </div>
    <div class="py-16 px-12 sm:px-12 lg:px-16">
        <h3 class="lg:text-4xl lg:mb-2 font-semibold">Ruang Berproses berjanji</h3>
        <h3 class="lg:text-4xl font-semibold">untuk....</h3>
        <div class="container grid grid-cols-2 gap-20 place-items-center">
            <img src="{{ asset('img/illustrations/rb-promises.jpg') }}" alt="Empathy woman illustrations">
            <ul
                class="text-sm sm:text-2xl lg:text-2xl lg:pr-48 font-medium list-disc inline-block align-bottom space-y-2">
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
            <h3 class="lg:text-2xl font-semibold lg:mb-2 sm:mb-2 mb-2">Layanan Kami</h3>
            <p class="lg:text-md sm:text-sm text-sm">Berbagai macam layanan tersedia untuk setiap kebutuhanmu</p>
            <div class="hidden lg:block sm:mt-8 lg:mt-8">
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
                        <div class="grid grid-cols-3 gap-10 place-items-center lg:mx-28 sm:mx-10 mx-8">
                            <img src="{{ asset('img/illustrations/virtual-support-group.jpg') }}"
                                class="rounded-full w-2/3 justify-self-end aspect-square" alt="Virtual Support Group">
                            <div class="col-span-2">
                                <h4 class="font-semibold text-base sm:text-base lg:text-lg sm:mb-3 mb-2">Virtual Support
                                    Group
                                </h4>
                                <p class="text-sm sm:text-sm lg:text-md lg:mb-6 sm:mb-6 mb-4">Kamu gak sendiri! Banyak
                                    orang
                                    yang
                                    sedang atau
                                    pernah ada di
                                    posisimu. Ceritakan masalahmu dengan privasi terjamin.</p>
                                <a href=""
                                    class="lg:px-8 lg:py-2 rounded-xl bg-white font-medium px-4 sm:px-8 py-2 sm:py-2 text-sm sm:text-sm lg:text-base">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10 active:z-20"
                    data-carousel-item="">
                    <div class="container absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="grid grid-cols-3 gap-10 place-items-center lg:mx-28 sm:mx-10 mx-8">
                            <img src="{{ asset('img/illustrations/pro-counseling.jpg') }}"
                                class="rounded-full w-2/3 justify-self-end aspect-square object-cover"
                                alt="Professional Counseling">
                            <div class="col-span-2">
                                <h4 class="font-semibold sm:text-base lg:text-lg sm:mb-3 mb-2">Professional Counseling
                                </h4>
                                <p class="text-sm sm:text-sm lg:text-md lg:mb-6 sm:mb-6 mb-4">Layanan konseling online
                                    dengan
                                    psikolog professional untuk
                                    memahami permasalahan yang sedang dialami serta memberikanmu penanganan terbaik.</p>
                                <a href=""
                                    class="lg:px-8 lg:py-2 rounded-xl bg-white font-medium px-4 sm:px-8 py-2 sm:py-2 text-sm sm:text-sm lg:text-base">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                    data-carousel-item="">
                    <div class="container absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="grid grid-cols-3 gap-10 place-items-center lg:mx-28 sm:mx-10 mx-8">
                            <img src="{{ asset('img/illustrations/peer-counseling.jpg') }}"
                                class="rounded-full w-2/3 justify-self-end aspect-square object-cover"
                                alt="Peer Counseling">
                            <div class="col-span-2">
                                <h4 class="font-semibold sm:text-base lg:text-lg sm:mb-3 mb-2">Peer Counseling</h4>
                                <p class="text-sm sm:text-sm lg:text-md lg:mb-6 sm:mb-6 mb-4">Layanan konseling dengan
                                    konselor
                                    sebaya terlatih untuk
                                    menangani kasus kondisi kesehatan mental non klinis. Tenang aja, layanan ini free!
                                </p>
                                <a href=""
                                    class="lg:px-8 lg:py-2 rounded-xl bg-white font-medium px-4 sm:px-8 py-2 sm:py-2 text-sm sm:text-sm lg:text-base">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 space-x-3 -translate-x-1/2 bottom-5 left-1/2 hidden lg:flex">
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
                    <svg aria-hidden="true" class="w-5 h-5 text-[#2b2b2b] sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
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
                    <svg aria-hidden="true" class="w-5 h-5 text-[#2b2b2b] sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
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
        <section class="testimonials">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div id="customers-testimonials" class="owl-carousel">

                            <!--TESTIMONIAL 1 -->
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle"
                                        src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                        alt="">
                                    <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                        Completely synergize resource taxing relationships via premier niche markets.
                                        Professionally cultivate.</p>
                                </div>
                                <div class="testimonial-name">EMILIANO AQUILANI</div>
                            </div>
                            <!--END OF TESTIMONIAL 1 -->
                            <!--TESTIMONIAL 2 -->
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle"
                                        src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                        alt="">
                                    <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                        Completely synergize resource taxing relationships via premier niche markets.
                                        Professionally cultivate.</p>
                                </div>
                                <div class="testimonial-name">ANNA ITURBE</div>
                            </div>
                            <!--END OF TESTIMONIAL 2 -->
                            <!--TESTIMONIAL 3 -->
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle"
                                        src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                        alt="">
                                    <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                        Completely synergize resource taxing relationships via premier niche markets.
                                        Professionally cultivate.</p>
                                </div>
                                <div class="testimonial-name">LARA ATKINSON</div>
                            </div>
                            <!--END OF TESTIMONIAL 3 -->
                            <!--TESTIMONIAL 4 -->
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle"
                                        src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                        alt="">
                                    <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                        Completely synergize resource taxing relationships via premier niche markets.
                                        Professionally cultivate.</p>
                                </div>
                                <div class="testimonial-name">IAN OWEN</div>
                            </div>
                            <!--END OF TESTIMONIAL 4 -->
                            <!--TESTIMONIAL 5 -->
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-circle"
                                        src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                        alt="">
                                    <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                        Completely synergize resource taxing relationships via premier niche markets.
                                        Professionally cultivate.</p>
                                </div>
                                <div class="testimonial-name">MICHAEL TEDDY</div>
                            </div>
                            <!--END OF TESTIMONIAL 5 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="pt-20">
        <div class="mx-auto text-center mb-7 sm:mb-14">
            <h3 class="lg:text-2xl font-semibold">Artikel Berproses</h3>
        </div>
        <div class="grid sm:grid-cols-2 lg:mx-20 sm:mx-10 mx-8">
            <div class="grid grid-cols-3 lg:gap-2 sm:gap-3 gap-2 lg:mb-10 mb-6">
                <div class="lg:mr-3">
                    <img src="{{ asset('img/illustrations/jumbotron-home.png' ) }}" alt=""
                        class="rounded-lg lg:h-full lg:w-full object-cover aspect-video">
                </div>
                <div class="col-span-2">
                    <div class="col-span-2 self-end font-semibold lg:text-lg sm:text-base">Judul Artikel</div>
                    <div class="row-span-2 col-span-2 lg:text-base sm:text-sm text-xs sm:line-clamp-3">Lorem ipsum dolor
                        sit
                        amet
                        consectetur
                        adipisicing
                        elit. Sequi delectus quod deserunt aperiamre inventore?</div>
                </div>
            </div>
            <div class="grid grid-cols-3 lg:gap-2 sm:gap-3 gap-2 lg:mb-10 mb-6">
                <div class="lg:mr-3">
                    <img src="{{ asset('img/illustrations/virtual-support-group.jpg' ) }}" alt=""
                        class="rounded-lg lg:h-full lg:w-full object-cover aspect-video">
                </div>
                <div class="col-span-2">
                    <div class="col-span-2 self-end font-semibold lg:text-lg sm:text-base">Judul Artikel</div>
                    <div class="row-span-2 col-span-2 text-base sm:text-sm sm:line-clamp-3">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing
                        elit. Sequi delectus quod deserunt aperiamre inventore?</div>
                </div>
            </div>
            <div class="grid grid-cols-3 lg:gap-2 sm:gap-3 gap-2 lg:mb-10 mb-6">
                <div class="lg:mr-3">
                    <img src="{{ asset('img/illustrations/peer-counseling.jpg' ) }}" alt=""
                        class="rounded-lg lg:h-full lg:w-full object-cover aspect-video">
                </div>
                <div class="col-span-2">
                    <div class="col-span-2 self-end font-semibold lg:text-lg sm:text-base">Judul Artikel</div>
                    <div class="row-span-2 col-span-2 text-base sm:text-sm sm:line-clamp-3">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing
                        elit. Sequi delectus quod deserunt aperiamre inventore?</div>
                </div>
            </div>
            <div class="grid grid-cols-3 lg:gap-2 sm:gap-3 gap-2 lg:mb-10 sm:mb-10 mb-6">
                <div class="lg:mr-3">
                    <img src="{{ asset('img/illustrations/pro-counseling.jpg' ) }}" alt=""
                        class="rounded-lg lg:h-full lg:w-full object-cover aspect-video">
                </div>
                <div class="col-span-2">
                    <div class="col-span-2 self-end font-semibold lg:text-lg sm:text-base">Judul Artikel</div>
                    <div class="row-span-2 col-span-2 text-base sm:text-sm sm:line-clamp-3">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing
                        elit. Sequi delectus quod deserunt aperiamre inventore?</div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href=""
                class="bg-white text-black border-black border-[1px] lg:px-4 sm:px-4 px-4 lg:py-2 sm:py-2 py-2 rounded-lg sm:text-sm text-sm">Lihat
                Selengkapnya</a>
        </div>
    </div>
    <div class="py-20">
        <div class="mx-auto text-center">
            <h3 class="lg:text-2xl font-semibold lg:mb-2 text-black">Klien Kami</h3>
            <div class="cover-wrapper">
                <div id="client-logos" class="owl-carousel text-center">
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/saint-john.png') }}" alt="Saint John" srcset="">
                            <p class="mt-2">St. John's Catholic School</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/basuki-grup.jpg') }}" alt="Basuki Pratama Engineering"
                                srcset="">
                            <p class="mt-2">Basuki Pratama Engineering</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/kelas-harmoni.jpg') }}" alt="Kelas Main Harmoni" srcset="">
                            <p class="mt-2">Kelas Main Harmoni</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/defasindo.jpeg') }}" alt="PT Defasindo Kreasi Prima"
                                srcset="">
                            <p class="mt-2">PT Defasindo Kreasi Prima</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/stockbit.jpg') }}" alt="Stockbit" srcset="">
                            <p class="mt-2">Stockbit</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/rodeo-kerta-kencana.jpg') }}" alt="PT Rodeo Kerta Kencana"
                                srcset="">
                            <p class="mt-2">PT Rodeo Kerta Kencana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection