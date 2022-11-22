@extends('layout.layout')

@push('styles')
<style>
nav ul li a {
    color: black !important;
}

#footer {
    display: none;
}
</style>
@endpush

@section('content')
@if(session()->has('success'))
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" data-modal-show="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full font-poppins">
    <div class="relative w-50 max-w-2xl h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal body -->
            <div class="text-center pt-10 px-10">
                <i class="text-green-400 w-24 h-24 inline-block mb-6" data-feather="user-check"></i>
                <p class="border-t border-b py-2 text-sm border-green-100">Yeay, akun berhasil dibuat! Silakan login.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="defaultModal" type="button"
                    class="mx-auto text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">OK</button>
            </div>
        </div>
    </div>
</div>
@endif

@if(session()->has('loginError'))
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" data-modal-show="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full font-poppins">
    <div class="relative w-50 max-w-2xl h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal body -->
            <div class="text-center pt-10 px-10">
                <i class="text-red-400 w-24 h-24 inline-block mb-6" data-feather="x-circle"></i>
                <p class="border-t border-b py-2 text-sm border-green-100">Login gagal. Cek kembali email atau
                    password Anda.</p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="defaultModal" type="button"
                    class="mx-auto text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">OK</button>
            </div>
        </div>
    </div>
</div>
@endif

<div class="grid xs:grid-cols-1 md:grid-cols-2 font-quicksand lg:pl-2 gap-6 bg-hero-login sm:bg-none bg-slate-50">
    <div class="lg:pb-12 sm:pt-20 md:pt-20 pt-32 px-10 sm:px-auto md:px-10 lg:px-10 xl:px-10">
        <h1 class="xs:text-2xl sm:text-4xl md:text-3xl lg:text-4xl font-bold" style="line-height: 1.5;">Berproses Menuju
            Versi Terbaikmu
            Dimulai
            Disini</h1>
        <form action="/login" method="POST" class="mt-8 lg:mt-14 lg:mr-52">
            @csrf
            <div class="relative z-0 mb-4 sm:mb-4 md:mb-8 lg:mb-6 w-full group">
                <input type="email" name="email" id="email"
                    class="@error('email') is-invalid @enderror bg-transparent block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer"
                    placeholder=" " autofocus required="" value="{{ old('email') }}">
                <label for="email"
                    class="bg-slate-50 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-dark-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">EMAIL</label>
            </div>
            @error('email')
            <div class="invalid-feedback block mt-2 font-semibold">
                <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                        width="10"></i>{{ $message }}</p>
            </div>
            @enderror
            <div class="relative z-0 w-full group">
                <input type="password" name="password" id="password"
                    class="@error('password') is-invalid @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer"
                    placeholder=" " required="" value="{{ old('password') }}">
                <label for="password"
                    class="bg-slate-50 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-dark-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">PASSWORD</label>
            </div>
            @error('password')
            <div class="invalid-feedback block mt-2 font-semibold">
                <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                        width="10"></i>{{ $message }}</p>
            </div>
            @enderror
            <button type="submit"
                class="xs:mt-5 sm:mt-8 md:mt-8 lg:mt-8 text-white font-bold bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Masuk
                Sekarang</button>
        </form>
        <p class="text-sm mt-3 lg:mt-3">Belum punya akun? <a href="/register" class="font-semibold">Daftar
                sekarang!</a>
        </p>
    </div>
    <div class="md:pt-32 lg:pt-20 hidden sm:hidden md:block lg:block xl:block min-h-screen">
        <img src="{{ asset('img/illustrations/login.png') }}" alt="" class="">
    </div>
</div>
@endsection