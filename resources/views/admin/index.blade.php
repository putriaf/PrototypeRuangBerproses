@extends('layout.layout')

@section('content')

@foreach($professionalcounselings as $pc)
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <h1>Professional Counseling List</h1>
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

@foreach($regprofessionalcounselings as $rpc)
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <h1>Professional Counseling Registration</h1>
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
        {{ $rpc->bukti_transfer }}
    </td>
    <td class="px-6 py-4">
        {{ $rpc->status_pendaftaran }}
    </td>
</tr>
@endforeach

@endsection