@extends('layout.layout')

@push('styles')
<style>
nav ul li a {
    color: black !important;
}

#footer {
    display: none;
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
<link href="{{ asset('css/auth-validation.css') }}" rel="stylesheet">
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
        <p class="underline underline-offset-8 mb-2 font-semibold"
            style="text-decoration-color: #FB8D66; text-decoration-thickness: 2px">
            LOGIN</p>
        <h1 class="xs:text-2xl sm:text-4xl md:text-3xl lg:text-4xl font-bold" style="line-height: 1.5;">Berproses Menuju
            Versi Terbaikmu
            Dimulai
            Disini</h1>
        <form action="/login" method="POST" class="mt-8 lg:mt-14 lg:mr-52" name="login-form">
            @csrf
            <div class="input-group relative z-0 mb-4 sm:mb-4 md:mb-8 lg:mb-6 w-full group">
                <input type="email" name="email" id="email"
                    class="@error('email') is-invalid @enderror input bg-transparent block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer"
                    placeholder=" " autofocus required="" value="{{ old('email') }}" autocomplete="off">
                <label for="email"
                    class="bg-slate-50 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-dark-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">EMAIL</label>
                <span class="error-message"></span>
                <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <title>check-circle</title>
                    <g fill="none">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>

                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <title>exclamation-circle</title>
                    <g fill="none">
                        <path d="M12 8v4m0 4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
            @error('email')
            <div class="invalid-feedback block mt-2 font-semibold">
                <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                        width="10"></i>{{ $message }}</p>
            </div>
            @enderror
            <div class="relative z-0 w-full group">
                <input type="password" name="password" id="password"
                    class="@error('password') is-invalid @enderror input block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer"
                    placeholder=" " required="" value="{{ old('password') }}">
                <label for="password"
                    class="bg-slate-50 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-dark-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">PASSWORD</label>
                <span class="error-message"></span>
                <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <title>check-circle</title>
                    <g fill="none">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>

                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <title>exclamation-circle</title>
                    <g fill="none">
                        <path d="M12 8v4m0 4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
            @error('password')
            <div class="invalid-feedback block mt-2 font-semibold">
                <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                        width="10"></i>{{ $message }}</p>
            </div>
            @enderror
            <button type="submit" id="submit-btn" style="background-color: #eb6536"
                class="flex xs:mt-5 sm:mt-8 md:mt-8 lg:mt-8 text-white font-bold hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center lg:min-w-[2/3]"><span
                    id="submit-label">Masuk
                    Sekarang</span>
                <svg aria-hidden="true" id="loading-svg"
                    class="hidden ml-3 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-dark-blue"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />
                </svg>
            </button>
        </form>
        <p class="text-sm mt-3 lg:mt-3">Belum punya akun? <a href="/register" class="font-semibold">Daftar
                sekarang!</a>
        </p>
    </div>
    <div class="md:pt-32 lg:pt-[70px] hidden sm:hidden md:block lg:block xl:block min-h-screen">
        <img src="{{ asset('img/illustrations/login.png') }}" alt="" class="lg:h-full">
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/loginreg-btn.js') }}"></script>
<script src="{{ asset('js/login-validation.js') }}"></script>
@endpush