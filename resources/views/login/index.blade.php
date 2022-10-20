@extends('layout.layout')

@section('content')
<div class="grid grid-cols-2 font-quicksand lg:ml-16 gap-6">
    <div class="lg:py-12">
        <h1 class="lg:text-4xl font-bold">Berproses Menuju Versi Terbaikmu Dimulai Disini</h1>
        <form action="/login" method="POST" class="lg:mt-14 lg:mr-52">
            @csrf
            <div class="relative z-0 lg:mb-12 w-full group">
                <input type="email" name="email" id="email"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="" value="{{ old('email') }}">
                <label for="email"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">EMAIL</label>
            </div>
            <div class="relative z-0 mb-8 w-full group">
                <input type="password" name="password" id="password"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="" value="{{ old('password') }}">
                <label for="password"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">PASSWORD</label>
            </div>
            <button type="submit"
                class="text-white font-bold bg-red-400 hover:bg-rb-light-orange focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk
                Sekarang</button>
        </form>
        <p class="text-sm lg:mt-3">Belum punya akun? <a href="" class="font-semibold">Daftar sekarang!</a></p>
    </div>
    <div class="">
        <img src="{{ asset('img/illustrations/login.png') }}" alt="">
    </div>
</div>
@endsection