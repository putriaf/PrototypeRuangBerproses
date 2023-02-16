@extends('layout.layout')

@push('styles')
  <style>
    nav ul li a {
      color: black !important;
    }
  </style>
@endpush

@section('content')
  <ul>
    <li><a href="/program/psytalk/daftar">Daftar Psytalk</a></li>
    <li><a href="/program/kelas-berproses/daftar">Daftar Kelas Berproses</a></li>
  </ul>
@endsection
