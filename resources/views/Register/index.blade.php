@extends('layout.layout')

@section('content')
<section class="lg:ml-16 lg:py-12">
    <h1>Buat Akun dan Akses Layanan Sepenuhnya</h1>
    <form class="">
        <div class="flex flex-row">
            <div class="basis-1/2 relative z-0 lg:mb-12 w-full group">
                <input type="email" name="floating_email" id="floating_email"
                    class="rounded-lg block py-2.5 px-2 w-2/3 text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ml-2 peer-focus:-mt-3">EMAIL</label>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="basis-1/2 relative z-0 lg:mb-12 w-full group">
                <input type="email" name="floating_email" id="floating_email"
                    class="rounded-lg block py-2.5 px-2 w-2/3 text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ml-2 peer-focus:-mt-3">EMAIL</label>
            </div>
            <div class="basis-1/2 relative z-0 lg:mb-12 w-full group">
                <input type="email" name="floating_email" id="floating_email"
                    class="rounded-lg block py-2.5 px-2 w-2/3 text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ml-2 peer-focus:-mt-3">EMAIL</label>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="basis-1/2 relative z-0 lg:mb-12 w-full group">
                <div class="flex items-center mr-4">
                    <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline
                        1</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline
                        2</label>
                </div>
                <div class="flex items-center mr-4">
                    <input checked="" id="inline-checked-radio" type="radio" value="" name="inline-radio-group"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-checked-radio"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline checked</label>
                </div>
                <div class="flex items-center">
                    <input disabled="" id="inline-disabled-radio" type="radio" value="" name="inline-radio-group"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-disabled-radio"
                        class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Inline disabled</label>
                </div>
            </div>
            <div class="basis-1/2 relative z-0 lg:mb-12 w-full group">
                <input type="email" name="floating_email" id="floating_email"
                    class="rounded-lg block py-2.5 px-2 w-2/3 text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">

                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input datepicker="" datepicker-autohide="" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                        placeholder="Select date">
                </div>

                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ml-2 peer-focus:-mt-3">EMAIL</label>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="basis-1/2 relative z-0 lg:mb-12 w-full group">
                <input type="email" name="floating_email" id="floating_email"
                    class="rounded-lg block py-2.5 px-2 w-2/3 text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ml-2 peer-focus:-mt-3">EMAIL</label>
            </div>
            <div class="basis-1/2 relative z-0 lg:mb-12 w-full group">
                <input type="email" name="floating_email" id="floating_email"
                    class="rounded-lg block py-2.5 px-2 w-2/3 text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ml-2 peer-focus:-mt-3">EMAIL</label>
            </div>
        </div>
        <button type="submit"
            class="text-white font-bold bg-red-400 hover:bg-rb-light-orange focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk
            Sekarang</button>
    </form>
    <p class="text-sm lg:mt-3">Sudah punya akun? <a href="" class="font-semibold">Masuk sekarang!</a></p>
</section>
@endsection