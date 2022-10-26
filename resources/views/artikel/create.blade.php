@extends('layout.layout')

@section('content')
<div class="p-12 font-quicksand">
    <h1 class="font-bold text-3xl lg:mb-8">Tambah Data Artikel</h1>
    <form method="POST" action="/admin/artikel-berproses/tambah" enctype="multipart/form-data">
        @csrf
        <input type="text" class="hidden" id="user_id" name="user_id" value="{{ session()->get('id') }}">
        <div class="mb-6">
            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Judul</label>
            <input type="text" id="judul"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="">
        </div>
        <div class="mb-6">
            <label for="isi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Isi</label>
            <input type="text" id="isi" name="isi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="">
        </div>

        <h2 class="fs-title">Upload Poster</h2>
        <input class="form-control mt-5" type="file" id="poster" name="poster">

        <button type="submit"
            class="lg:mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>
@endsection