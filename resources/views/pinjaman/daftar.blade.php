@extends('layout.app')

@section('title', 'Penawaran Pinjaman')

@section('content')

{{-- <a href="/pinjaman/daftar" class="card-link btn-primary"> Lihat Semua Penawaran Pinjaman </a>
<hr> --}}

@foreach($Daftarpjm as $dpj)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p> Jenis Pinjaman : {{ $dpj['jenis'] }}</p>
    <p> Jangka Waktu : {{ $dpj['jangka'] }}</p>
    <p> Nilai Pinjaman : {{ $dpj['nilai'] }}</p>
    <p> Cicilan : {{ $dpj['cicilan'] }}</p>
    <a href="/pinjaman/{{ $dpj['id'] }}/edit" class="card-link btn-warning">Edit </a>
    <form action="/pinjaman/{{ $dpj['id'] }}" method="post">
        @csrf
        @method('DELETE')
        <button class="card-link btn-danger">Hapus</button>

    <hr>
    
  </div>
</div>

@endforeach
@endsection
    