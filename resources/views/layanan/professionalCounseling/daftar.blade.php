@extends('layout.layout')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<div class="font-montserrat my-10">
    <div class="flex justify-center item-center mt-8">
        <h1 class="text-2xl font-bold">Form Pendaftaran Virtual Professional Counseling</h1>
    </div>
    <div class="flex justify-center item-center">
        <form method="POST" action="/layanan/professional-counseling/daftar" enctype="multipart/form-data"
            class="w-6/12">
            @csrf
            <div class="bg-abu rounded-lg">
                <div class="m-10 py-10">
                    <div class="flex flex-col md:flex-row pb-4 mb-4">
                        <div class="w-44 font-bold h-6 mx-2 mt-3">Status</div>
                        <div class="flex-1 flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2">
                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                    <input type="text" class="p-1 px-2 w-full" name="status" id="status"
                                        value="{{ old('status')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row pb-4 mb-4">
                        <div class="w-44 font-bold h-6 mx-2 mt-3">Pendidikan Terakhir</div>
                        <div class="flex-1 flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2">
                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                    <input type="text" class="p-1 px-2 w-full" name="pendidikan_terakhir"
                                        id="pendidikan_terakhir" value="{{ old('pendidikan_terakhir')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row pb-4 mb-4">
                        <div class="w-44 font-bold h-6 mx-2 mt-3">Pekerjaan</div>
                        <div class="flex-1 flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2">
                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                    <input type="text" class="p-1 px-2 w-full" name="pekerjaan" id="pekerjaan"
                                        value="{{ old('pekerjaan')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row pb-4 mb-4">
                        <div class="w-44 font-bold h-6 mx-2 mt-3">Domisili</div>
                        <div class="flex-1 flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2">
                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                    <input type="text" class="p-1 px-2 w-full" name="domisili" id="domisili"
                                        value="{{ old('domisili')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row pb-4 mb-4">
                        <div class="w-44 text-base font-bold h-6 mx-2 mt-3">Consent Sharing</div>
                        <div class="flex-1 flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2">
                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                    <input type="text" class="p-1 px-2 w-full" name="consent_sharing"
                                        id="consent_sharing" value="{{ old('consent_sharing')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row pb-4 mb-4">
                        <div class="w-44 text-base font-bold h-6 mx-2 mt-3">Consent Screening</div>
                        <div class="flex-1 flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2">
                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                    <input type="text" class="p-1 px-2 w-full" name="consent_screening"
                                        id="consent_screening" value="{{ old('consent_screening')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row pb-4 mb-4">
                        <div class="w-44 text-base font-bold h-6 mx-2 mt-3">Bukti Transfer</div>
                        <div class="flex-1 flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2">
                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                    <input type="text" class="p-1 px-2 w-full" name="bukti_transfer" id="bukti_transfer"
                                        value="{{ old('bukti_transfer')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(session()->has('token'))
            <input id="user_id" type="hidden" name="user_id" value="{{ session()->get('id') }}">
            @endif
            <div class="flex justify-center item-center pb-4">
                <button
                    class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40"
                    type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection