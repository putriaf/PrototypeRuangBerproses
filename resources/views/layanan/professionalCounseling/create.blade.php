@extends('layout.admin-dashboard')

@section('content')
<a href="/admin" class="mx-5 mt-5 underline block">Back</a>
<div class="max-h-[80vh] overflow-y-auto">
    <form action="/admin/layanan/procounseling-list/tambah" method="POST" id="editpcList" enctype="multipart/form-data"
        class="relative bg-white rounded-lg shadow dark:bg-gray-700 mx-5 my-5">
        @csrf
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Edit Data Konseling Tersedia
            </h3>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
            <div class="grid grid-cols-6 gap-6">
                @foreach($counseling_fields as $csf)
                <div class="col-span-6 sm:col-span-3">
                    <label for="{{ $csf }}"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $csf }}</label>
                    <input type="text" name="{{ $csf }}" id="{{ $csf }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ old( $csf) }}" required="">
                </div>
                @endforeach
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