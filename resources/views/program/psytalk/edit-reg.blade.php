@extends('layout.admin-dashboard')

@section('content')
<a href="/admin" class="mx-5 mt-5 underline block">Back</a>
<div class="max-h-[80vh] overflow-y-auto">
    <form action="/admin/program/psytalk/{{ $psytalk->id }}" method="POST" enctype="multipart/form-data"
        class="relative bg-white rounded-lg shadow dark:bg-gray-700 mx-5 my-5">
        @method('put')
        @csrf
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Tambah Data PSYTALK
            </h3>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
            <div class="grid grid-cols gap-6">
                <div class="sm:col-span-3">
                    <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        ID Pendaftaran</label>
                    <input type="text" name="id" id="id"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $psytalk->id }}" required="" hidden disabled>
                </div>
                <div class="sm:col-span-3 hidden">
                    <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                        ID</label>
                    <input type="text" name="user_id" id="user_id"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ session()->get('id') }}" required="" hidden>
                </div>
                <div class="sm:col-span-3 hidden">
                    <label for="psytalk_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PSYTALK
                        ID</label>
                    <input type="text" name="psytalk_id" id="psytalk_id"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $psytalk->id }}" required="" hidden>
                </div>
                <div class="grid grid-cols gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <img src="{{ asset('https://ruangberproses-dev.site/storage/' . $psytalk->bukti_transfer) }}"
                            alt="Bukti Pembayaran">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="status_pendaftaran"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status
                        Pendaftaran</label>
                    <select id="status_pendaftaran" name="status_pendaftaran"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected="">Edit Status Pendaftaran</option>
                        <option value="berhasil">Berhasil</option>
                        <option value="gagal">Ditolak</option>
                    </select>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
            </div>
    </form>
</div>
@endsection