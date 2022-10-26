@extends('layout.layout')

@section('content')

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
        role="tablist">
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                aria-selected="true">Profile</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                aria-selected="false">Dashboard</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                aria-selected="false">Settings</button>
        </li>
        <li role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                aria-selected="false">Contacts</button>
        </li>
    </ul>
</div>
<div id="myTabContent">
    <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking
            another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
            the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
        aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking
            another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
            the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel"
        aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking
            another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
            the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel"
        aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking
            another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
            the content visibility and styling.</p>
    </div>
</div>

<h1>Professional Counseling</h1>
@foreach($professionalcounselings as $pc)
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
        {{ $pc->id }}
    </th>
    <td class="px-6 py-4">
        {{ $pc->nama_konselor }}
    </td>
    <td class="px-6 py-4">
        {{ $pc->waktu }}
    </td>
    <td class="px-6 py-4">
        {{ $pc->biaya }}
    </td>
</tr>
@endforeach

<h1>Professional Counseling Registration</h1>
@foreach($regprofessionalcounselings as $rpc)
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
        {{ $rpc->id }}
    </th>
    <td class="px-6 py-4">
        {{ $rpc->user_id }}
    </td>
    <td class="px-6 py-4">
        {{ $rpc->procounseling_id }}
    </td>
    <td class="px-6 py-4">
        {{ $rpc->consent_sharing }}
    </td>
    <td class="px-6 py-4">
        {{ $rpc->consent_screening }}
    </td>
    <td class="px-6 py-4">
        <img src="{{ asset('storage/' . $rpc->bukti_transfer) }}" alt="test">
    </td>
    <td class="px-6 py-4">
        {{ $rpc->status_pendaftaran }}
    </td>
</tr>
@endforeach

<h1>Artikel Berproses</h1>
@foreach($artikels as $artikel)
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
        {{ $artikel->id }}
    </th>
    <td class="px-6 py-4">
        {{ $artikel->user_id }}
    </td>
    <td class="px-6 py-4">
        {{ $artikel->judul }}
    </td>
    <td class="px-6 py-4">
        {{ $artikel->isi }}
    </td>

</tr>
@endforeach

@endsection