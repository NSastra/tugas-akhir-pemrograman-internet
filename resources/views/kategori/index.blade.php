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
    <p> Daftar Peminjam : </p>
    <hr>

    @foreach($ktg->pinjamen as $pjm)
      <li> {{ $pjm->nama }} - {{ $pjm->jumlah  }} </li>

      <form action="/kategori/hapus/{{ $ktg['id'] }}" method="post">
        @csrf
        @method('PUT')
        <button class="card-link btn-danger">Hapus</button>
        </form>
        
      <hr>
      <a href="/kategori/tambahdata/{{ $ktg['id'] }}" class="card-link btn-primary">Tambah Data </a>
      @endforeach

      {{-- pinjamen dalam $ktg->pinjamen harus sesuai dengan method yang ada di model --}}
    
  </div>
</div>

@endforeach
@endsection
    