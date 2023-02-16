@extends('layout.layout')

@push('styles')
  <style>
    nav ul li a {
      color: black !important;
    }
  </style>
  <link href="{{ asset('css/testimonial-carousel.css') }}" rel="stylesheet">
@endpush

@section('content')
  <section class="lg:mx-10 lg:my-10 font-quicksand pt-20">
    <div class="text-center">
      <h1 class="text-3xl font-bold lg:mb-4">Ruang Berproses</h1>
      <p>Selalu ada ruang untuk kamu berproses menuju versi terbaikmu</p>
      <section class="testimonials">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div id="customers-testimonials" class="owl-carousel">
                <!--TESTIMONIAL 1 -->
                <div class="item px-12 pt-7 mb-5">
                  <div class="shadow-effect rounded-md py-10 px-6">
                    <p class="text-base lg:mb-7 font-poppins">Pembicaranya asik dan moderatornya juga
                      keren. Disetiap
                      pembicara selesai
                      menjawab pertanyaan peserta, moderator selalu menyimpulkan jawaban pembicara
                    </p>
                    <div class="flex lg:mt-4">
                      <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                          src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                      <div class="basis-4/5 self-center text-left mb-5">
                        <p class="text-sm font-semibold">R.A.B, 21 tahun</p>
                        <p>Mahasiswa Psikologi</p>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-name bg-primary-dark-blue">PSYTALK</div>
                </div>
                <!--END OF TESTIMONIAL 1 -->
                <!--TESTIMONIAL 2 -->
                <div class="item px-12 pt-7 mb-8">
                  <div class="shadow-effect rounded-md py-10 px-6">
                    <p class="text-base lg:mb-7 font-poppins">Kesan webinar sangat baik. Saya mendapat
                      wawasan lebih luas dan mendalam mengenai journaling serta manfaatnya secara
                      spesifik terhadap kesehatan mental, karena saya belum pernah mendalami mengenai
                      journaling
                    </p>
                    <div class="flex lg:mt-4">
                      <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                          src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                      <div class="basis-4/5 self-center text-left mb-5">
                        <p class="text-sm font-semibold">S.E.A 42 tahun</p>
                        <p>Konselor Sekolah</p>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-name bg-primary-dark-blue">Kelas Berproses</div>
                </div>
                <!--END OF TESTIMONIAL 2 -->
                <!--TESTIMONIAL 3 -->
                <div class="item px-12 pt-7 mb-8">
                  <div class="shadow-effect rounded-md py-10 px-6">
                    <p class="text-base lg:mb-7 font-poppins">Menurutku gak terlalu mahal dan Psikolog
                      RB yang konseling aku waktu itu juga baik & bisa menghangatkan suasana, ngga
                      canggung juga, yang jelas aku bisa mengatasi masalahku.
                    </p>
                    <div class="flex lg:mt-4">
                      <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                          src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                      <div class="basis-4/5 self-center text-left mb-5">
                        <p class="text-sm font-semibold">N</p>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-name bg-primary-dark-blue">Professional Counseling</div>
                </div>
                <!--END OF TESTIMONIAL 3 -->
                <!--TESTIMONIAL 4 -->
                <div class="item px-12 pt-7 mb-8">
                  <div class="shadow-effect rounded-md py-10 px-6">
                    <p class="text-base lg:mb-7 font-poppins">Seru bangetttt menjadi pengalaman dalam
                      hidup saya karena dengan adanya sesi ini saya dapat bercerita apa yang dialami
                      oleh saya sehingga saya mendapatkan kesempatan untuk bercerita pada sesi ini
                    </p>
                    <div class="flex lg:mt-4">
                      <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                          src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                      <div class="basis-4/5 self-center text-left mb-5">
                        <p class="text-sm font-semibold">M</p>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-name bg-primary-dark-blue">Support Group</div>
                </div>
                <!--END OF TESTIMONIAL 4 -->
                <!--TESTIMONIAL 5 -->
                <div class="item px-12 pt-7 mb-8">
                  <div class="shadow-effect rounded-md py-10 px-6">
                    <p class="text-base lg:mb-7 font-poppins">Awalnya saya merasa takut dan ragu untuk
                      bercerita pada orang lain. Namun setelah saya melakukan sesi konseling saya
                      merasa lega, nyaman, dan seperti menemukan hal yang saya cari selama ini. Bukan
                      sekedar omongan motivasi melainkan ilmu dan solusi.
                    </p>
                    <div class="flex lg:mt-4">
                      <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                          src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                      <div class="basis-4/5 self-center text-left mb-5">
                        <p class="text-sm font-semibold">S</p>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-name bg-primary-dark-blue">Peer Counseling</div>
                </div>
                <!--END OF TESTIMONIAL 5 -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="lg:p-20">
      <h3 class="font-semibold text-xl lg:mb-8 text-center">Dibalik Layar</h3>
      <div id="accordion-collapse" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
          <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white"
            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
            aria-controls="accordion-collapse-body-1">
            <span>Departemen Event & Content</span>
            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-1" class="" aria-labelledby="accordion-collapse-heading-1">
          <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
              components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.
            </p>
            <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get
                started</a> and start
              developing websites even faster with components on top of Tailwind CSS.</p>
          </div>
        </div>
        <h2 id="accordion-collapse-heading-2">
          <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
            data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
            aria-controls="accordion-collapse-body-2">
            <span>Is there a Figma file available?</span>
            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
          <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using
              the Figma software so everything you see in the library has a design equivalent in our Figma
              file.</p>
            <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on
              the utility classes from Tailwind CSS and components from Flowbite.</p>
          </div>
        </div>
        <h2 id="accordion-collapse-heading-3">
          <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
            data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
            aria-controls="accordion-collapse-body-3">
            <span>What are the differences between Flowbite and Tailwind UI?</span>
            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
          <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components
              from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
              Another difference is that Flowbite relies on smaller and standalone components, whereas
              Tailwind UI offers sections of pages.</p>
            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
              Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the
              best of two worlds.</p>
            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
              <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite
                  Pro</a></li>
              <li><a href="https://tailwindui.com/" rel="nofollow"
                  class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
