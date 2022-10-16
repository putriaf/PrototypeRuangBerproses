@extends('layout.layout')

<!--  Hero -->
@section('content')
<section class="-mt-20 font-quicksand">
    <div class="pt-52 sm:px-12 h-screen bg-hero-procounseling bg-no-repeat bg-cover bg-center bg-fixed mx-auto text-center text-slate-100 xl:px-64">
        <h1 class="font-bold text-3xl sm:text-4xl md:text-5xl mb-3 sm:mb-4" style="line-height: 1.2">Konseling dengan Psikolog Professional</h1>
        <h2 class="font-light text-sm sm:text-md px-8 sm:px-6 mb-6 sm:mb-10 lg:px-16">Butuh ruang aman dan nyaman untuk bercerita? Tenaga profesional siap mendampingimu berproses menuju versi terbaik!</h2>
        <a href="" class="bg-gradient-to-r from-[#FB8D66] px-8 py-2 sm:px-10 sm:py-4 rounded-3xl font-semibold lg:mt-4 inline-block">Daftar Sekarang</a>
        <p class="text-white font-semibold text-sm lg:mt-5">bergabung dengan 200+ orang yang sudah mendaftar</p>
    </div>
    <div class="grid grid-cols-2 gap-2 lg:m-20">
        <div class="">
            <div class="lg:mb-10">
                <h3 class="font-semibold text-xl lg:mb-4">Apa Sih Konseling Itu?</h3>
                <p>Konseling adalah sebuah upaya untuk membantu mengatasi konflik, hambatan dan kesulitan dalam memenuhi kebutuhan pada individu, serta upaya untuk meningkatkan kesehatan mental.</p>
            </div>
            <div class="">
                <h3 class="font-semibold text-xl lg:mb-4">Tanda-Tanda Kamu Butuh Konseling</h3>
                <ul class="list-disc list-outside lg:ml-5">
                    <li>Tidak tahu harus berbuat apa ketika kamu punya masalah</li>
                    <li>Tidak ada orang yang bisa kamu percaya</li>
                    <li>Kamu merasa ada perubahan baik secara emosi, perilaku, maupun pikiran yang berpengaruh terhadap kesehatan fisik</li>
                    <li>Kamu menghadapi hambatan dari dalam dirimu sendiri</li>
                    <li>Kamu tidak mampu menghadapi masalah dalam pendidikan, pekerjaan, hubungan romantis, dan keluarga</li>
                </ul>
            </div>
        </div>
        <div class="mx-auto">
            <div href="#" class="block bg-[#1D1F4E] text-white p-6 max-w-sm rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="grid grid-cols-3">
                    <div class="col-span-2">
                        <h4 class="mb-2 text-lg tracking-tight dark:text-white">PAKET </h4>
                        <h4 class="mb-2 text-lg tracking-tight dark:text-white">Professional Counseling</h4>
                    </div>
                    <div class="">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-white">Rp100.000</h5>
                    </div>
                </div>
                <p class="font-normal dark:text-gray-400 lg:my-5 text-xl">1 SESI | 60 menit</p>
                <ul>
                    <li class="flex flex-row lg:mb-3">
                        <i data-feather="check-circle" class="inline basis-auto lg:mr-3"></i>
                        <p class="basis-4/5">Sesi konseling melalui platform online meeting</p>
                    </li>
                    <li class="flex flex-row lg:mb-3">
                        <i data-feather="check-circle" class="inline basis-auto lg:mr-3"></i>
                        <p class="basis-4/5">Ditangani psikolog klinis</p>
                    </li>
                    <li class="flex flex-row lg:mb-3">
                        <i data-feather="check-circle" class="inline basis-auto lg:mr-3"></i>
                        <p class="basis-4/5">Catatan konsultasi</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="lg:mx-32 lg:py-20 bg-pale-yellow rounded-2xl">
        <h3 class="font-semibold text-xl lg:mb-8 text-center">Alur Konseling</h3>
        <ul class="list-decimal content-center font-medium list-inside mx-auto table">
            <li class="lg:mb-2">Daftar Konseling</li>
            <li class="lg:mb-2">Selesaikan Pembayaran</li>
            <li class="lg:mb-2">Dapatkan Jadwal dan Link Konseling</li>
            <li>Mulai Konseling!</li>
        </ul>
    </div>
    <div class="lg:p-20">
        <h3 class="font-semibold text-xl lg:mb-8 text-center">Psikolog Berpengalaman Kami</h3>
    </div>
    <div class="lg:p-20">
        <h3 class="font-semibold text-xl lg:mb-8 text-center">Pertanyaan Sahabat Berproses</h3>
        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                <span>What is Flowbite?</span>
                <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                <span>Is there a Figma file available?</span>
                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                <span>What are the differences between Flowbite and Tailwind UI?</span>
                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<section>
@endsection