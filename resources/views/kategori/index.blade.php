@extends('layout.app')

@section('title', 'Kategori Pinjaman')

@section('content')

<a href="/pinjaman/daftar" class="card-link btn-primary"> Lihat Semua Penawaran Pinjaman </a>
<hr>

@foreach($Kategori as $ktg)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p>{{ $ktg['jenis'] }}</p>
    <p>{{ $ktg['jangka'] }}</p>
    <p>{{ $ktg['nilai'] }}</p>

    <hr>

    {{-- @foreach($ktg->produks as $produk)
      <li> {{$produk->nama_pro}} </li>
      @endforeach --}}
    
  </div>
</div>

@endforeach
@endsection
    