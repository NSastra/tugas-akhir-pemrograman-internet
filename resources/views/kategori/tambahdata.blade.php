@extends('layout.app')

@section('title', 'Tambah Data')

@section('content')

<form action="/kategori/tambahdata/{{ $Kategori->id }}" method="post">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Peminjam</label>
    <select class="form-select" aria-label="Default select example" name="pinjamen_id">
      <option selected>Pilih Peminjam :</option>
        @foreach($Pinjamen as $pjm)
          <option value="{{ $pjm->id }}">{{ $pjm->nama }}</option>
        @endforeach 
    </select>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>

@endsection

    
