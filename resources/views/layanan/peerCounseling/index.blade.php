@extends('layout.layout')

@push('styles')
  <link href="{{ asset('css/slick-carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('https://ruangberproses-dev.site/css/slick-carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('css/accordion-faq.css') }}" rel="stylesheet">
@endpush

<!--  Hero -->
@section('content')
  <section class="font-quicksand">
    <div
      class="pt-52 sm:px-12 h-screen bg-hero-peercounseling bg-no-repeat bg-cover bg-center bg-fixed mx-auto text-center text-slate-100 xl:px-64">
      <h1 class="font-bold text-3xl sm:text-4xl md:text-5xl mb-3 sm:mb-4" style="line-height: 1.2">Konseling dengan
        Konselor Sebaya</h1>
      <h2 class="font-light text-sm sm:text-md px-8 sm:px-6 mb-6 sm:mb-10 lg:px-16">Butuh ruang aman dan nyaman untuk
        bercerita? Tenaga profesional siap mendampingimu berproses menuju versi terbaik!</h2>
      <a href="/layanan/peer-counseling/daftar"
        class="bg-gradient-to-r from-[#FB8D66] px-8 py-2 sm:px-10 sm:py-4 rounded-3xl font-semibold lg:mt-4 inline-block">Daftar
        Sekarang</a>
      <p class="text-white font-semibold text-sm mt-5">bergabung dengan 200+ orang yang sudah mendaftar</p>
    </div>
    <div class="grid md:grid-cols-2 gap-2 lg:m-20 my-10 mx-5">
      <div class="">
        <div class="lg:mb-10 mb-10">
          <h3 class="font-semibold text-xl mb-4">Apa Sih Konseling Itu?</h3>
          <p>Konseling adalah sebuah upaya untuk membantu mengatasi konflik, hambatan dan kesulitan dalam memenuhi
            kebutuhan pada individu, serta upaya untuk meningkatkan kesehatan mental.</p>
        </div>
        <div class="">
          <h3 class="font-semibold text-xl mb-4">Tanda-Tanda Kamu Butuh Konseling</h3>
          <ul class="list-disc list-outside ml-5">
            <li>Tidak tahu harus berbuat apa ketika kamu punya masalah</li>
            <li>Tidak ada orang yang bisa kamu percaya</li>
            <li>Kamu merasa ada perubahan baik secara emosi, perilaku, maupun pikiran yang berpengaruh terhadap
              kesehatan fisik</li>
            <li>Kamu menghadapi hambatan dari dalam dirimu sendiri</li>
            <li>Kamu tidak mampu menghadapi masalah dalam pendidikan, pekerjaan, hubungan romantis, dan keluarga
            </li>
          </ul>
        </div>
      </div>
      <div class="xs:mx-auto my-7 lg:m-auto sm:w-full">
        <div href="#"
          class="block bg-[#1D1F4E] text-white p-6 sm:max-w-sm rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          <div class="grid grid-cols-3">
            <div class="col-span-2">
              <h4 class="mb-2 text-lg tracking-tight dark:text-white">PAKET </h4>
              <h4 class="mb-2 text-lg tracking-tight dark:text-white">Professional Counseling</h4>
            </div>
            <div class="">
              <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-white">Rp100.000</h5>
            </div>
          </div>
          <p class="font-normal dark:text-gray-400 mb-5 lg:my-5 text-xl">1 SESI | 60 menit</p>
          <ul>
            <li class="flex flex-row mb-2 lg:mb-3">
              <i data-feather="check-circle" class="inline basis-auto mr-2 lg:mr-3"></i>
              <p class="basis-4/5">Sesi konseling melalui platform online meeting</p>
            </li>
            <li class="flex flex-row mb-2 lg:mb-3">
              <i data-feather="check-circle" class="inline basis-auto mr-2 lg:mr-3"></i>
              <p class="basis-4/5">Ditangani psikolog klinis</p>
            </li>
            <li class="flex flex-row mb-2 lg:mb-3">
              <i data-feather="check-circle" class="inline basis-auto mr-2 lg:mr-3"></i>
              <p class="basis-4/5">Catatan konsultasi</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="lg:mx-32 px-5 py-10 lg:py-20 bg-pale-yellow rounded-2xl">
      <h3 class="font-semibold text-xl mb-5 lg:mb-8 text-center">Alur Konseling</h3>
      <ul class="list-decimal content-center font-medium list-inside mx-auto table">
        <li class="lg:mb-2">Daftar Konseling</li>
        <li class="lg:mb-2">Selesaikan Pembayaran</li>
        <li class="lg:mb-2">Dapatkan Jadwal dan Link Konseling</li>
        <li>Mulai Konseling!</li>
      </ul>
    </div>
    <div class="lg:p-20 px-5 pt-10 pb-4">
      <h3 class="font-semibold text-xl text-center">Psikolog Berpengalaman Kami</h3>
      <div class="cover-wrapper">
        <div id="client-logos" class="owl-carousel text-center">
          <div class="item rounded-lg">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/ariyanto.png') }}" alt="Saint John" srcset=""
                class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Ariyanto Yanwar, M.Psi., Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/ayu.jpeg') }}" alt="Basuki Pratama Engineering" srcset=""
                class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Ayu Pradani S. Putri, M.Psi., Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/daniswara.jpeg') }}" alt="Daniswara Agusta Wijaya, M.Psi., Psikolog"
                srcset="" class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Daniswara Agusta Wijaya, M.Psi., Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/laurentia.jpg') }}"
                alt="Laurentia Wahyu Prastiti, S.Psi.,M.Psi.,Psikolog" srcset=""
                class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Laurentia Wahyu Prastiti, S.Psi.,M.Psi.,Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/lebda.jpeg') }}" alt="Lebda Katodhia., M.Psi., Psikolog"
                srcset="" class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Lebda Katodhia., M.Psi., Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/nica.jpg') }}" alt="Eukaristianica Theofani, M.Psi., Psikolog"
                srcset="" class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Eukaristianica Theofani, M.Psi., Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/rininta.jpg') }}" alt="Rininta Meyftanoria, S.Psi, M.Psi, Psikolog"
                srcset="" class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Rininta Meyftanoria, S.Psi, M.Psi, Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/stenny.jpg') }}" alt="Stenny Prawitasari, M. Psi., Psikolog"
                srcset="" class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Stenny Prawitasari, M. Psi., Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/tiara.jpg') }}"
                alt="Tiara Adjeng Endrastyana, S.Psi., M.Psi., Psikolog" srcset=""
                class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Tiara Adjeng Endrastyana, S.Psi., M.Psi., Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/utari.jpeg') }}" alt="Utari Krisnamurthi, M.Psi,. Psikolog"
                srcset="" class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Utari Krisnamurthi, M.Psi,. Psikolog</p>
            </div>
          </div>
          <div class="item">
            <div class="client-inners">
              <img src="{{ asset('img/psychologists/vanessa.jpg') }}" alt="PT Rodeo Kerta Kencana" srcset=""
                class="max-w-fit rounded-lg mx-auto">
              <p class="mt-2">Vanessa Adistiafany Pricillia, M. Psi., Psikolog </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lg:p-20 px-5 py-14 bg-pale-yellow faq">
      <h3 class="font-semibold text-xl mb-8 text-center">Pertanyaan Sahabat Berproses</h3>
      <div id="accordion-collapse" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
          <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 bg-pale-orange text-gray-900"
            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
            aria-controls="accordion-collapse-body-1">
            <span>Apa perbedaan konseling professional dan konseling dengan konselor sebaya (peer
              counseling)?</span>
            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
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
    <!-- jQuery -->
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/multistep-form.js') }}"></script>
    <section>
    @endsection
