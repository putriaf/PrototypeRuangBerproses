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
@endpush

@section('content')
<section class="xs:px-10 sm:px-5 md:px-10 lg:px-16 xs:pt-20 sm:pt-20 md:pt-20 lg:pt-24 font-quicksand bg-slate-50">
    <p class="underline underline-offset-8 mb-4 font-semibold"
        style="text-decoration-color: #FB8D66; text-decoration-thickness: 2px">
        REGISTER</p>
    <h1 class="xs:text-2xl sm:text-2xl md:text-2xl lg:text-3xl font-bold xs:mb-2 lg:mb-2">Buat Akun dan Akses Layanan
    </h1>
    <h1 class="xs:text-2xl sm:text-2xl md:text-2xl lg:text-3xl font-bold xs:mb-6 sm:mb-6 md:mb-6 lg:mb-3">Sepenuhnya
    </h1>
    <form method="POST" action="/register" enctype="multipart/form-data" class="lg:mr-52">
        @csrf
        <div class="grid grid-cols-2">
            <div class="xs:mr-4 sm:mr-4 md:mr-4 lg:mr-16">
                <div class="relative z-0 w-full group xs:mt-4 sm:mt-4 md:mt-4 lg:mt-6">
                    <input type="email" name="email" id="email"
                        class="@error('email') is-invalid @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        value="{{ old('email') }}" placeholder=" " required="">
                    <label for="email"
                        class="absolute text-sm text-graymb-4 lg:mb-6-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white focus:bg-slate-50  dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">EMAIL</label>
                </div>
                @error('email')
                <div class="invalid-feedback block mt-2 font-semibold">
                    <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                            width="10"></i>{{ $message }}</p>
                </div>
                @enderror
            </div>
            <div class="xs:mr-4 sm:mr-4 md:mr-4 lg:mr-16">
                <div class="relative z-0 xs:mt-4 sm:mt-4 md:mt-4 lg:mt-6 w-full group">
                    <input type="text" name="no_telp" id="no_telp"
                        class="@error('no_telp') is-invalid @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        value="{{ old('no_telp') }}" placeholder=" " required="">
                    <label for="no_telp"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white focus:bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">NOMOR
                        TELEPON</label>
                </div>
                @error('no_telp')
                <div class="invalid-feedback block mt-2 font-semibold">
                    <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                            width="10"></i>{{ $message }}</p>
                </div>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="xs:mr-4 sm:mr-4 md:mr-4 lg:mr-16">
                <div class="relative z-0 xs:mt-4 sm:mt-4 md:mt-4 lg:mt-6 w-full group">
                    <input type="text" name="nama" id="nama"
                        class="@error('nama') is-invalid @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        value="{{ old('nama') }}" placeholder=" " required="">
                    <label for="nama"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white focus:bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">NAMA</label>
                </div>
                @error('nama')
                <div class="invalid-feedback block mt-2 font-semibold">
                    <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                            width="10"></i>{{ $message }}</p>
                </div>
                @enderror
            </div>
            <div class="xs:mr-4 sm:mr-4 md:mr-4 lg:mr-16">
                <div class="relative z-0 xs:mt-4 sm:mt-4 md:mt-4 lg:mt-6 w-full group">
                    <input type="text" name="username" id="username"
                        class="@error('username') is-invalid @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        value="{{ old('username') }}" placeholder=" " required="">
                    <label for="username"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white focus:bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">USERNAME</label>
                </div>
                @error('username')
                <div class="invalid-feedback block mt-2 font-semibold">
                    <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                            width="10"></i>{{ $message }}</p>
                </div>
                @enderror
            </div>
        </div>
        <div class="flex">
            <div class="basis-1/2 xs:mt-4 sm:mt-4 md:mt-4 lg:mt-6 ">
                <label for="jk" class="">JENIS KELAMIN</label>
            </div>
            <div class="basis-1/2 xs:mt-4 sm:mt-4 md:mt-4 lg:mt-6">
                <label for="tgl_lahir" class="">TANGGAL LAHIR</label>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="xs:mr-4 sm:mr-4 md:mr-4 lg:mr-16">
                <div class="relative z-0 w-full group">
                    <div class="flex items-center mr-4 lg:mt-2">
                        <input id="jk_l" type="radio" value="L" name="jk"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            value="L">
                        <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Laki-laki</label>
                    </div>
                    <div class="flex items-center mr-4 lg:mt-2">
                        <input id="jk_p" type="radio" value="P" name="jk"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            value="P">
                        <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Perempuan</label>
                    </div>
                    @error('jk')
                    <div class="invalid-feedback block mt-2 font-semibold">
                        <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                                width="10"></i>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="xs:mr-4 sm:mr-4 md:mr-4 lg:mr-16">
                <div class="relative z-0 w-full group">
                    <div class="relative lg:mt-2">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker="" datepicker-autohide="" type="text"
                            class="bg-slate-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                            placeholder="Select date" name="tgl_lahir" id="tgl_lahir" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="xs:mr-4 sm:mr-4 md:mr-4 lg:mr-16">
                <div class="relative z-0 xs:mt-4 sm:mt-4 md:mt-4 lg:mt-6 w-full group">
                    <div class="">
                        <input type="password" name="password" id="password"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            value="{{ old('password') }}" placeholder=" " required="">
                        <label for="password"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white focus:bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">PASSWORD</label>
                    </div>
                </div>
                @error('password')
                <div class="invalid-feedback block mt-2 font-semibold">
                    <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                            width="10"></i>{{ $message }}</p>
                </div>
                @enderror
            </div>
            <div class="xs:mr-4 sm:mr-4 md:mr-4 lg:mr-16">
                <div class="relative z-0 xs:mt-4 sm:mt-4 md:mt-4 lg:mt-6 w-full group">
                    <input type="password" name="password_confirm" id="password_confirm"
                        class="@error('password_confirm') is-invalid @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        value="" placeholder=" " required="">
                    <label for="password_confirm"
                        class="@error('password_confirm') is-invalid lg:top-3 @enderror absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white focus:bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">KONFIRMASI
                        PASSWORD</label>
                </div>
                @error('password_confirm')
                <div class="invalid-feedback block mt-2 font-semibold">
                    <p class="text-red-700 text-xs"><i class="w-4 h-4 inline-block mr-1" data-feather="alert-circle"
                            width="10"></i>{{ $message }}</p>
                </div>
                @enderror
            </div>
        </div>
        <input id="role" type="hidden" name="role" required value="0">
        <button type="submit" id="submit-btn"
            class="flex xs:mt-5 sm:mt-8 md:mt-8 lg:mt-10 text-white font-bold bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center lg:min-w-[2/3]"><span
                id="submit-label">Daftar
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
    <p class="text-sm xs:mt-3 sm:mt-3 md:mt-3 lg:mt-3 pb-9">Sudah punya akun? <a href="/login"
            class="font-semibold">Masuk
            sekarang!</a></p>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/loginreg-btn.js') }}"></script>
@endpush