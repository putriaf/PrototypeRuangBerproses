@extends('layout.layout')
@push('styles')
<style>
nav ul li a {
    color: black !important;
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
<div class="w-full bg-pale-yellow">
    <section class="md:mx-20 md:pt-36 lg:pb-10 font-quicksand lg:m-auto w-fit ">
        <h1 class="lg:text-3xl text-2xl font-semibold mb-8 text-center lg:pt-24">Screening</h1>
        <div class="inline-block mx-auto mb-5 text-sm border-2 rounded-md p-3 w-full bg-white font-medium">
            <p>Pada bagian ini, Anda diminta mengisi 42 pertanyaan dengan nilai skala 0-3.</p>
            <p class="mt-1">Keterangan:</p>
            <p>0 : Tidak ada atau tidak pernah</p>
            <p>1 : Sesuai dengan yang dialami sampai tingkat tertentu atau kadang-kadang</p>
            <p>2 : Sering</p>
            <p>3 : Sangat sesuai dengan yang dialami atau hampir setiap saat</p>
        </div>
        <form method="POST" action="/screening" enctype="multipart/form-data">
            <div class="border-2 rounded-lg p-3 bg-white" style="border-color: #FB8D66;">
                @csrf
                <input type="text" id="user_id" name="user_id" value="{{ session()->get('id') }}" hidden>
                <?php $i = 0 ?>
                @foreach($screening_variables as $var)
                <div class="lg:mb-4 mb-7">
                    <h2 class="lg:mb-3 mb-3 font-semibold">{{ $screening_labels[$i] }}</h2>
                    <label for="{{ $var }}"></label>
                    <div class="flex">
                        <p class="mr-5 text-xs">Tidak ada atau tidak pernah</p>
                        <div class="flex items-center mr-4">
                            <input id="{{ $var }}" type="radio" value="0" name="{{ $var }}" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="{{ $var }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                0</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="{{ $var }}" type="radio" value="1" name="{{ $var }}"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="{{ $var }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                1</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="{{ $var }}" type="radio" value="2" name="{{ $var }}"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="{{ $var }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                2</label>
                        </div>
                        <div class="flex items-center mr-5">
                            <input id="{{ $var }}" type="radio" value="3" name="{{ $var }}"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="{{ $var }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                3</label>
                        </div>
                        <p class="text-xs">Sangat sesuai atau hampir setiap hari</p>
                    </div>
                </div>
                <?php $i++; ?>
                @endforeach
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-9"
                    style="background-color: #1D1F4E;">Submit</button>
            </div>
        </form>
    </section>
</div>
@endsection