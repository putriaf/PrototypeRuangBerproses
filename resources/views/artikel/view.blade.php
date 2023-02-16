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

    .latest-item p {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      text-overflow: ellipsis;
      overflow: hidden;
    }
  </style>
  <link href="{{ asset('css/line-clamp.css') }}" rel="stylesheet">
@endpush

@section('content')
  <section class="mx-5 lg:mx-10 lg:my-10 font-quicksand mt-20 lg:mt-28 min-h-screen">
    <div class="">
      <h1 class="text-2xl sm:text-3xl font-bold">{{ $artikel->judul }}</h1>
      <div class="my-3 lg:my-5 text-sm">
        <p>oleh {{ $artikel->nama }}</p>
        <p>8 September 2022</p>
      </div>
    </div>
    <div class="sm:flex">
      <div class="sm:flex-auto sm:w-2/3 lg:w-2/3 sm:mr-6 md:mr-8 lg:mr-12">
        <div class="">
          <div class="">
            <img src="{{ asset('img/illustrations/jumbotron-home.png') }}" alt="" class="rounded-lg">
          </div>
          <div class="mt-8 lg:mt-10">
            <p class="mb-5"> {!! $artikel->isi !!}
            </p>
          </div>
        </div>
      </div>
      @if ($latest_artikels != null)
        <hr class="xs:block xs:mt-12 xs:mb-5 xs:border-dark-blue">
        <div class="sm:flex-auto sm:w-1/3 lg:w-1/3 xs:mb-16">
          <h2 class="text-xl xs:font-bold font-semibold mb-2 lg:mb-3">Artikel Terbaru</h2>
          @foreach ($latest_artikels as $latest_artikel)
            <div class="mb-2 lg:mb-3 xs:bg-pale-yellow xs:p-3 xs:rounded-xl latest-item">
              <h3 class="text-base font-semibold mb-1 lg:mb-1 line-clamp-1">{{ $latest_artikel->judul }}</h3>
              <p class="text-sm">{!! $latest_artikel->isi !!}
              </p>
            </div>
          @endforeach
        </div>
      @endif
    </div>
  </section>
@endsection
