@extends('layout.layout')

@push('styles')
<style>
body,
html {
    overflow: hidden
}

::-webkit-scrollbar {
    display: none;
}

section {
    -ms-overflow-style: none;
    /* IE and Edge */
    scrollbar-width: none;
    /* Firefox */
}

nav ul li a {
    color: black !important;
}
</style>
@endpush

@section('content')
<section class="font-quicksand mx-20 my-8">
    <div class="grid grid-cols-4 h-screen gap-8">
        <div class="shadow-md rounded-md">
            <div class="">
                <div class="text-center">
                    <img src="{{ asset('img/user/avatar.png') }}" alt="User Profile" class="w-20 mx-auto">
                    <h1 class="text-2xl font-bold lg:mb-2">{{ session()->get('nama') }}</h1>
                    <p>{{ session()->get('email') }}</p>
                </div>
                <hr class="mt-1 mb-3 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="">
                    <div class="relative max-h-40 overflow-y-auto overflow-x-hidden">
                        <table class="w-full text-left text-gray-500 dark:text-gray-400 text-xs">
                            <tbody>
                                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-2 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        NOMOR TELEPON
                                    </th>
                                    <td class="py-2 px-2">
                                        0812939379373
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-2 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        TANGGAL LAHIR
                                    </th>
                                    <td class="py-2 px-2">
                                        18/12/2001
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-2 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        JENIS KELAMIN
                                    </th>
                                    <td class="py-2 px-2">
                                        Perempuan
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row"
                                        class="py-2 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        DOMISILI
                                    </th>
                                    <td class="py-2 px-2">
                                        Tangerang
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row"
                                        class="py-2 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        PEKERJAAN
                                    </th>
                                    <td class="py-2 px-2">
                                        Mahasiswa
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="profileMenu" data-tabs-toggle="#profileMenuContent" role="tablist">
                    <div class="bg-rb-light-orange lg:mx-10 font-bold rounded-md" role="presentation">
                        <button class="block mx-auto lg:px-10 lg:py-2 lg:my-5 text-xs" id="editProfil-tab"
                            data-tabs-target="#editProfil" type="button" role="tab" aria-controls="editProfil"
                            aria-selected="false">
                            <p class="text-white">Edit
                                Profil</p>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 mx-auto text-center text-xs gap-2 lg:px-4">
                        <div role="presentation">
                            <button href="" id="riwayatLayanan-tab" data-tabs-target="#riwayatLayanan" type="button"
                                role="tab" aria-controls="riwayatLayanan" aria-selected="true">
                                <i data-feather="inbox" class="mx-auto"></i>
                                <p>Riwayat Pendaftaran Layanan</p>
                            </button>
                        </div>
                        <div class="" role="presentation">
                            <button href="" id="riwayatProgram-tab" data-tabs-target="#riwayatProgram" type="button"
                                role="tab" aria-controls="riwayatProgram" aria-selected="false">
                                <i data-feather="book-open" class="mx-auto"></i>
                                <p>Riwayat Pendaftaran Program</p>
                            </button>
                        </div>
                    </div>
                </div>
                <a href="" class="mt-52 underline text-xs text-center mx-auto block lg:mt-4">Logout</a>
            </div>
        </div>
        <div class="col-span-3 max-h-screen shadow-md rounded-md lg:p-12 overflow-y-auto overflow-x-hidden bg-[#F3F3F3] lg:mb-16"
            id="profileMenuContent">
            <div class="" id="riwayatLayanan" role="tabpanel" aria-labelledby="riwayatLayanan-tab">
                <h2 class="text-3xl font-semibold lg:mb-12">Riwayat Pendaftaran Layanan</h2>
                <div class="pb-10">
                    @foreach($reg_procounseling as $user_rpc)
                    <div class="bg-white lg:mb-8 rounded-xl lg:p-4">
                        <h3 class="font-semibold text-lg">PSYTALK 66</h3>
                        <p class="text-xs">5 Oktober 2022</p>
                        @if($user_rpc->status_pendaftaran == 'konfirmasi_admin')
                        <p class="lg:p-2 rounded-md bg-[#FFEAB2] w-fit font-semibold text-sm lg:mt-4">MENUNGGU
                            KONFIRMASI
                            ADMIN
                        </p>
                        @elseif($user_rpc->status_pendaftaran == 'berhasil')
                        <p class="lg:p-2 rounded-md bg-[#AAF0BE] w-fit font-semibold text-sm lg:mt-4">BERHASIL
                        </p>
                        @else
                        <p class="lg:p-2 rounded-md bg-[#D9D9D9] w-fit font-semibold text-sm lg:mt-4">GAGAL
                        </p>
                        @endif
                    </div>
                    @endforeach
                    @foreach($reg_peercounseling as $user_rpec)
                    <div class="bg-white lg:mb-8 rounded-xl lg:p-4">
                        <h3 class="font-semibold text-lg">PSYTALK 66</h3>
                        <p class="text-xs">5 Oktober 2022</p>
                        @if($user_rpec->status_pendaftaran == 'konfirmasi_admin')
                        <p class="lg:p-2 rounded-md bg-[#FFEAB2] w-fit font-semibold text-sm lg:mt-4">MENUNGGU
                            KONFIRMASI
                            ADMIN
                        </p>
                        @elseif($user_rpec->status_pendaftaran == 'berhasil')
                        <p class="lg:p-2 rounded-md bg-[#AAF0BE] w-fit font-semibold text-sm lg:mt-4">BERHASIL
                        </p>
                        @else
                        <p class="lg:p-2 rounded-md bg-[#D9D9D9] w-fit font-semibold text-sm lg:mt-4">GAGAL
                        </p>
                        @endif
                    </div>
                    @endforeach
                    @foreach($reg_sg as $user_rsg)
                    <div class="bg-white lg:mb-8 rounded-xl lg:p-4">
                        <h3 class="font-semibold text-lg">PSYTALK 66</h3>
                        <p class="text-xs">5 Oktober 2022</p>
                        @if($user_rsg->status_pendaftaran == 'konfirmasi_admin')
                        <p class="lg:p-2 rounded-md bg-[#FFEAB2] w-fit font-semibold text-sm lg:mt-4">MENUNGGU
                            KONFIRMASI
                            ADMIN
                        </p>
                        @elseif($user_rsg->status_pendaftaran == 'berhasil')
                        <p class="lg:p-2 rounded-md bg-[#AAF0BE] w-fit font-semibold text-sm lg:mt-4">BERHASIL
                        </p>
                        @else
                        <p class="lg:p-2 rounded-md bg-[#D9D9D9] w-fit font-semibold text-sm lg:mt-4">GAGAL
                        </p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="" id="riwayatProgram" role="tabpanel" aria-labelledby="riwayatProgram-tab">
                <h2 class="text-3xl font-semibold lg:mb-12">Riwayat Pendaftaran Program</h2>
                <div class="pb-10">
                    @foreach($reg_psytalk as $user_rpsytalk)
                    <div class="bg-white lg:mb-8 rounded-xl lg:p-4">
                        <h3 class="font-semibold text-lg">PSYTALK 66</h3>
                        <p class="text-xs">5 Oktober 2022</p>
                        @if($user_rpsytalk->status_pendaftaran == 'konfirmasi_admin')
                        <p class="lg:p-2 rounded-md bg-[#FFEAB2] w-fit font-semibold text-sm lg:mt-4">MENUNGGU
                            KONFIRMASI
                            ADMIN
                        </p>
                        @elseif($user_rpsytalk->status_pendaftaran == 'berhasil')
                        <p class="lg:p-2 rounded-md bg-[#AAF0BE] w-fit font-semibold text-sm lg:mt-4">BERHASIL
                        </p>
                        @else
                        <p class="lg:p-2 rounded-md bg-[#D9D9D9] w-fit font-semibold text-sm lg:mt-4">GAGAL
                        </p>
                        @endif
                    </div>
                    @endforeach
                    @foreach($reg_kb as $user_rkb)
                    <div class="bg-white lg:mb-8 rounded-xl lg:p-4">
                        <h3 class="font-semibold text-lg">PSYTALK 66</h3>
                        <p class="text-xs">5 Oktober 2022</p>
                        @if($user_rkb->status_pendaftaran == 'konfirmasi_admin')
                        <p class="lg:p-2 rounded-md bg-[#FFEAB2] w-fit font-semibold text-sm lg:mt-4">MENUNGGU
                            KONFIRMASI
                            ADMIN
                        </p>
                        @elseif($user_rkb->status_pendaftaran == 'berhasil')
                        <p class="lg:p-2 rounded-md bg-[#AAF0BE] w-fit font-semibold text-sm lg:mt-4">BERHASIL
                        </p>
                        @else
                        <p class="lg:p-2 rounded-md bg-[#D9D9D9] w-fit font-semibold text-sm lg:mt-4">GAGAL
                        </p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="" id="editProfil" role="tabpanel" aria-labelledby="editProfil-tab">
                <h2 class="text-3xl font-semibold lg:mb-12">Edit Profil</h2>
                <div class="pb-10">
                    <form method="POST" action="/profil/{{ $profilUser->username }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-6">
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            <input type="text" id="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('nama', $profilUser->nama) }}">
                        </div>
                        <div class="mb-6">
                            <label for="no_telp"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor
                                Telepon</label>
                            <input type="text" id="no_telp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('no_telp', $profilUser->no_telp) }}">
                        </div>
                        <div class="mb-6">
                            <label for="tgl_lahir"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                                Lahir</label>
                            <input type="text" id="tgl_lahir"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('tgl_lahir', $profilUser->tgl_lahir) }}">
                        </div>
                        <div class="mb-6">
                            <label for="domisili"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Domisili</label>
                            <input type="text" id="domisili"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('domisili', $profilUser->domisili) }}">
                        </div>
                        <div class="mb-6">
                            <label for="agama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agama</label>
                            <input type="text" id="agama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('agama', $profilUser->agama) }}">
                        </div>
                        <div class="mb-6">
                            <label for="pendidikan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pendidikan</label>
                            <input type="text" id="pendidikan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('pendidikan', $profilUser->pendidikan) }}">
                        </div>
                        <div class="mb-6">
                            <label for="pekerjaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan</label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('pekerjaan', $profilUser->pekerjaan) }}">
                        </div>
                        <div class="mb-6">
                            <label for="foto_profil"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Foto
                                Profil</label>
                            <input type="file" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('foto_profil', $profilUser->foto_profil) }}">
                        </div>
                        <div class="mb-6">
                            <label for="status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Status</label>
                            <input type="text" id="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('status', $profilUser->status) }}">
                        </div>
                        <div class="mb-6">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                            <input type="text" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('password', $profilUser->password) }}">
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection