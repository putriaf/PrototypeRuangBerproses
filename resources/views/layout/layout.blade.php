<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Berproses</title>
    <link rel="icon"
        href="{{ asset('https://ruangberproses-dev.herokuapp.com/img/ruang-berproses/rb-only-logo.png') }}">
    <link href="{{ asset('https://ruangberproses-dev.herokuapp.com/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&family=Poppins:wght@300;400;500;700&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
    <script src="{{ asset('https://ruangberproses-dev.herokuapp.com/js/navbar-scroll.js') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="http://www.24limousine.com/wp-content/themes/24Limousine/assets/css/owl.carousel.min.css">
    @vite(['resources/scss/app.scss', 'resources/css/app.css'])
    @stack('styles')
</head>

<body>
    <!-- Header -->
    @include('partials.header')

    <!-- Start Main -->
    <main class="min-h-screen">
        @yield('content')
    </main>
    <!-- End Main -->

    <!-- Start Footer -->
    <footer class="bg-primary-dark-blue font-montserrat text-neutral-200 lg:px-5 px-5 sm:px-5 py-10 lg:py-14 sm:py-12"
        id="footer">
        <div class="grid grid-cols-2 gap-10 lg:gap-14">
            <div class="">
                <img src="{{ asset('img/ruang-berproses/rb-only-logo.png') }}" alt="Logo Ruang Berproses"
                    class="w-2/5 lg:w-1/5 sm:w-2/5">
                <h2 class="text-lg sm:text-xl font-semibold my-2 lg:my-3 sm:my-2">Ruang Berproses</h2>
                <p class="text-xs sm:text-sm lg:w-3/4">Jangan ragu untuk menghubungi kami melalui telepon, email, atau
                    media sosial
                    kami. Kami pasti akan kembali menghubungi Anda sesegera mungkin.</p>
                <div class="flex flex-row lg:mt-8 mt-6 gap-5">
                    <i data-feather="facebook"></i>
                    <i data-feather="twitter"></i>
                    <i data-feather="instagram"></i>
                    <i data-feather="youtube"></i>
                </div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:mt-10 mt-10">
                <div class="">
                    <h3 class="font-semibold mb-3 lg:mb-5 sm:mb-5">Telusuri</h3>
                    <ul class="text-xs sm:text-sm">
                        <li class="mb-1 lg:mb-2"><a href="/">Home</a></li>
                        <li class="mb-1 lg:mb-2"><a href="">Layanan</a></li>
                        <li class="mb-1 lg:mb-2"><a href="">Program</a></li>
                        <li><a href="">Artikel</a></li>
                    </ul>
                </div>
                <div class="">
                    <h3 class="font-semibold mb-3 lg:mb-5 sm:mb-5">Informasi</h3>
                    <ul class="text-xs sm:text-sm">
                        <li class="mb-1 lg:mb-2"><a href="/">Tentang Kami</a></li>
                        <li><a href="">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script>
    feather.replace()
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/testimonial-carousel.js') }}"></script>
    <script type="text/javascript"
        src="http://www.24limousine.com/wp-content/themes/24Limousine/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('js/slick-carousel.js') }}"></script>
    @stack('scripts')
</body>

</html>