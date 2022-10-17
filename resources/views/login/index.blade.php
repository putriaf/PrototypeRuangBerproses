@extends('layout.layout')

@section('content')
<div class="grid grid-cols-2 font-quicksand lg:ml-16 gap-6">
    <div class="lg:py-12">
        <h1 class="lg:text-4xl font-bold">Berproses Menuju Versi Terbaikmu Dimulai Disini</h1>
        <form class="lg:mt-14">
            <div class="relative z-0 lg:mb-12 w-full group">
                <input type="email" name="floating_email" id="floating_email"
                    class="rounded-lg block py-2.5 px-2 w-2/3 text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ml-2 peer-focus:-mt-3">EMAIL</label>
            </div>
            <div class="relative z-0 mb-8 w-full group">
                <input type="password" name="floating_password" id="floating_password"
                    class="rounded-lg block py-2.5 px-2 w-2/3 text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="floating_password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ml-2 peer-focus:-mt-3">PASSWORD</label>
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