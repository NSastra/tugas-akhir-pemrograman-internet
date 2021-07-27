@extends('layout.app')

@section('title', 'Ajukan Pinjaman')

@section('content')
  <form action="/pinjaman/store" method="post">
@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}">
  </div>
  @error('nama')
    <div class="alert alert-danger"> {{ $message }}
    </div>
  @enderror

  <div class="form-group">
    <label for="exampleInputPassword1">NIM</label>
    <input type="text" class="form-control" name="nik" id="exampleInputPassword1" placeholder="Masukkan NIK" value="{{ old('nik') }}">
  </div>
  @error('nik')
    <div class="alert alert-danger"> {{ $message }}
    </div>
  @enderror

  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Pengajuan</label>
    <input type="text" class="form-control" name="jumlah" id="exampleInputPassword1" placeholder="Masukkan Jumlah Pinjaman" value="{{ old('jumlah') }}">
  </div>
  @error('jumlah')
    <div class="alert alert-danger"> {{ $message }}
    </div>
  @enderror

  <div class="form-group">
    <label for="exampleInputPassword1">Jaminan</label>
    <input type="text" class="form-control" name="jaminan" id="exampleInputPassword1" placeholder="Tuliskan Jaminan Anda" value="{{ old('jaminan') }}">
  </div>
  @error('jaminan')
    <div class="alert alert-danger"> {{ $message }}
    </div>
  @enderror

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


    @endsection
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>