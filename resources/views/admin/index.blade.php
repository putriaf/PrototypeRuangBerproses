@extends('layout.layout')

@push('styles')
<style>
nav ul li a {
    color: black !important;
}
</style>
@endpush

@section('content')

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
        role="tablist">
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                aria-selected="true">Professional Counseling</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                aria-selected="false">Data Pendaftaran Professional Counseling</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                aria-selected="false">Artikel</button>
        </li>
        <li role="presentation">
            <button
                class="inline-block hidden p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                aria-selected="false">Contacts</button>
        </li>
    </ul>
</div>
<div id="myTabContent">
    <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <h1>Professional Counseling</h1>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama Konselor
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Waktu
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Biaya
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professionalcounselings as $pc)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $pc->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $pc->nama_konselor }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $pc->waktu }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $pc->biaya }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
        aria-labelledby="dashboard-tab">
        <h1>Data Pendaftaran Professional Counseling</h1>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            ID User
                        </th>
                        <th scope="col" class="py-3 px-6">
                            ID Professional Counseling
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Persetujuan Sharing
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Persetujuan Screening
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Bukti Transfer
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Status Pendaftaran
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($regprofessionalcounselings as $rpc)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $rpc->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $rpc->user_id }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $rpc->procounseling_id }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $rpc->consent_sharing }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $rpc->consent_screening }}
                        </td>
                        <td class="py-4 px-6">
                            <img src="{{ asset('storage/' . $rpc->bukti_transfer) }}" alt="test">
                        </td>
                        <td class="py-4 px-6">
                            {{ $rpc->status_pendaftaran }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel"
        aria-labelledby="settings-tab">
        <h1>Artikel</h1>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            ID User
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Judul
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Isi
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artikels as $artikel)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $artikel->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $artikel->user_id }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $artikel->judul }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $artikel->isi }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel"
        aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking
            another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
            the content visibility and styling.</p>
    </div>
</div>

@endsection