@extends('layout.admin-dashboard')

@section('content')
<a href="/admin" class="mx-5 mt-5 underline block">Back</a>
<div class="max-h-[80vh] overflow-y-auto">
    <form action="/admin/layanan/professional-counseling/{{ $regproc->id }}" method="POST" enctype="multipart/form-data"
        id="editpcReg{{ $regproc->id }}" class="relative bg-white rounded-lg shadow dark:bg-gray-700 mx-5 my-5">
        <!-- Modal header -->
        @method('put')
        @csrf
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Konfirmasi Pembayaran
            </h3>
            <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-toggle="editpcRegModal{{ $regproc->id }}">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <img src="{{ asset('https://ruangberproses-dev.site/storage/' . $regproc->bukti_transfer) }}"
                        alt="Bukti Pembayaran">
                </div>
            </div>
            <label for="status_pendaftaran"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status
                Pendaftaran</label>
            <select id="status_pendaftaran" name="status_pendaftaran"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected="">Edit Status Pendaftaran</option>
                <option value="berhasil">Berhasil</option>
                <option value="gagal">Ditolak</option>
            </select>
            <div x-data
                x-init="flatpickr($refs.datetimewidget, {wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K'});"
                x-ref="datetimewidget" class="flatpickr container mx-auto mt-3 sm:mt-0 form__field">
                <label for="waktu_fix" class="form__field flex-grow block font-medium text-sm text-gray-700 mb-1">Waktu
                    Fix<span data-required="true" aria-hidden="true"></span></label>
                <div class="flex align-middle align-content-center">
                    <input x-ref="datetime" type="text" id="waktu_fix" data-input required placeholder="Pilih waktu"
                        name="waktu_fix"
                        class="block w-full px-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">

                    <a class="h-11 w-10 input-button cursor-pointer rounded-r-md bg-transparent border-gray-300 border-t border-b border-r"
                        title="clear" data-clear>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mt-2 ml-1" viewBox="0 0 20 20"
                            fill="#c53030">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
            </button>
        </div>
    </form>
</div>
@endsection