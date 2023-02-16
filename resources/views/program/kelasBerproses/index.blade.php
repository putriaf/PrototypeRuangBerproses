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
  </style>
@endpush

@section('content')
  <section class="mx-5 lg:mx-20 mt-20 lg:mt-28 lg:mb-10">
    <div class="mx-auto font-quicksand text-center mb-8 lg:mb-12">
      <h1 class="text-3xl font-bold lg:mb-3">Kelas Berproses</h1>
      <p class="text-md">Pematerian sekaligus pelatihan psikologi</p>
    </div>
    @if ($kbs == null)
      <div class="text-center mx-auto mt-24">
        <img src="{{ asset('img/illustrations/empty.svg') }}" alt="" class="w-56 mx-auto block">
        <p class="text-sm font-medium mt-5">Nantikan pelatihan terbaru bersama kami ya, Sahabat Berproses!
        </p>
      </div>
    @else
      <div class="grid grid-cols-3 md:grid-cols-3 gap-5 lg:gap-10 lg:mb-8">
        @foreach ($kbs as $kb)
          <div
            class="max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
              <img class="rounded-t-lg" src="{{ asset('img/illustrations/compressed/jumbotron-home.png') }}"
                alt="">
            </a>
            <div class="px-4 sm:px-8 py-5">
              <a href="#">
                <h5 class="mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $kb->topik }}
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
                  {{ $kb->tanggal }}
                </li>
                <li class="mb-2">
                  <svg class="w-5 h-5 inline mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  {{ $kb->waktu }}
                </li>
                <li class="mb-2">
                  <svg class="w-5 h-5 inline mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                    </path>
                  </svg>
                  {{ $kb->biaya }}
                </li>
              </ul>
              <a href="/program/kelas-berproses/{{ $kb->id }}/daftar"
                class="mx-6 sm:mx-16 block text-sm sm:text-base items-center py-2 font-medium text-center text-white bg-[#FB8D66] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Daftar
              </a>
            </div>
          </div>
        @endforeach
    @endif
    </div>
    <div class="py-16 lg:p-20 font-quicksand">
      <h3 class="font-semibold text-xl mb-8 lg:mb-8 text-center">Pertanyaan Sahabat Berproses</h3>
      <div id="accordion-collapse" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
          <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white"
            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
            aria-controls="accordion-collapse-body-1">
            <span>What is Flowbite?</span>
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
