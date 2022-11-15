@extends('layout.layout')

@section('content')
<section class="lg:mx-20 lg:mt-20 lg:mb-10 font-quicksand">
    <h1 class="lg:text-3xl font-semibold mb-8">Screening</h1>
    <form method="POST" action="/screening" enctype="multipart/form-data">
        @csrf
        <input type="text" id="user_id" name="user_id" value="{{ session()->get('id') }}" hidden>
        <?php $i = 0 ?>
        @foreach($screening_variables as $var)
        <div class="lg:mb-4">
            <h2 class="lg:mb-3">{{ $screening_labels[$i] }}</h2>
            <label for="{{ $var }}"></label>
            <div class="flex">
                <div class="flex items-center mr-4">
                    <input id="{{ $var }}" type="radio" value="0" name="{{ $var }}"
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
                <div class="flex items-center mr-4">
                    <input id="{{ $var }}" type="radio" value="3" name="{{ $var }}"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="{{ $var }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        3</label>
                </div>
            </div>
        </div>
        <?php $i++; ?>
        @endforeach

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 lg:mt-9">Submit</button>
    </form>

</section>
@endsection