@extends('layout.app')

@section('title', 'Edit Data Pinjaman')

@section('content')

@section('content')
<!-- DataTales Example -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
          </div>

          <!-- Content Row -->
          <div class="row">
          </div>
          <!-- /.container-fluid -->
  
          <form action="/pinjaman/{{ $Pinjamen['id'] }}" method="post">
            @csrf
            @method('PUT')
            
              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Kategori ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="kategori_id" aria-describedby="emailHelp" value="{{ old('kategori_id') ? old('kategori_id') : $Pinjamen->kategori_id }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama Peminjam</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old('nama') : $Pinjamen['nama'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">NIK Peminjam</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nik" aria-describedby="emailHelp" value="{{ old('nik') ? old('nik') : $Pinjamen['nik'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="jumlah" aria-describedby="emailHelp" value="{{ old('jumlah') ? old('jumlah') : $Pinjamen['jumlah'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Jaminan Pinjaman</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="jaminan" aria-describedby="emailHelp" value="{{ old('jaminan') ? old('jaminan') : $Pinjamen['jaminan'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Status Pinjaman</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="status" aria-describedby="emailHelp" value="{{ old('status') ? old('status') : $Pinjamen['status'] }}">
                </div>
              </div>


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
  


      </div>
    </form>
    </div>
  </div>
</div>
@endsection


@endsection