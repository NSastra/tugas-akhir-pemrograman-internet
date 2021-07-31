@extends('layout.app')

@section('title', 'Data Pinjaman')

@section('content')

{{-- <a href="/pinjaman/daftar" class="card-link btn-primary"> Lihat Semua Penawaran Pinjaman </a>
<hr> --}}

@foreach($Pinjamen as $pjm)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p> Kode Pinjaman : {{ $pjm['kategori_id'] }}</p>
    <p> Nama Peminjam : {{ $pjm['nama'] }}</p>
    <p> NIK Peminjam : {{ $pjm['nik'] }}</p>
    <p> Jumlah Pinjaman : {{ $pjm['jumlah'] }}</p>
    <p> Jaminan Pinjaman : {{ $pjm['jaminan'] }}</p>
    <p> Status Pinjaman : {{ $pjm['status'] }}</p>
    <a href="/pinjaman/{{ $pjm['id'] }}/edit" class="card-link btn-warning">Edit </a>
    <form action="/pinjaman/{{ $pjm['id'] }}" method="post">
        @csrf
        @method('DELETE')
        <button class="card-link btn-danger">Hapus</button>

    <hr>

    {{-- @foreach($pjm->produks as $produk)
      <li> {{$produk->nama_pro}} </li>
      @endforeach --}}
    
  </div>
</div>

@endforeach
@endsection
    