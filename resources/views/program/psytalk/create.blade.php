@extends('layout.admin-dashboard')

@section('content')
<a href="/admin" class="mx-5 mt-5 underline block">Back</a>
<div class="max-h-[80vh] overflow-y-auto">
    <form action="/admin/program/psytalk-list/tambah" method="POST" enctype="multipart/form-data"
        class="relative bg-white rounded-lg shadow dark:bg-gray-700 mx-5 my-5">
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
                    <label for="topik"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topik</label>
                    <input type="text" name="topik" id="topik"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" required="" hidden>
                </div>
                <div class="sm:col-span-3">
                    <label for="pembicara"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembicara</label>
                    <input type="text" name="pembicara" id="pembicara"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" required="" hidden>
                </div>
                <div class="sm:col-span-3">
                    <label for="biaya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Biaya (tanpa
                        kode mata uang)</label>
                    <input type="text" name="biaya" id="biaya"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" required="" hidden>
                </div>
                <div class="sm:col-span-3">
                    <label for="link_event" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                        Event</label>
                    <input type="text" name="link_event" id="link_event"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" required="" hidden>
                </div>
                <div class="sm:col-span-3">
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Event</label>
                    <div class="xs:mr-4 sm:mr-4 md:mr-4 lg:mr-16">
                        <div class="relative z-0 w-full group">
                            <div class="relative lg:mt-2">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input datepicker="" datepicker-autohide="" type="text"
                                    class="bg-slate-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                                    placeholder="Select date" name="tanggal" id="tanggal" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu
                        (Format HH:MM - HH:MM)</label>
                    <input type="text" name="waktu" id="waktu"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" required="" hidden>
                </div>
                <div class="sm:col-span-3">
                    <label for="poster"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poster</label>
                    <input type="file" name="poster" id="poster" class="" required="">
                </div>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
        </div>
    </form>
</div>
@endsection