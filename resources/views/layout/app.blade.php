<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>

  <div class="p-3 mb-2 bg-info text-white">

  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Pinjaman Kredit Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pinjaman/tambah">Ajukan Pinjaman</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="/tokobuku/daftar">Daftar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/tokobuku/masuk">Login</a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="/kategori">Lihat Kategori Pinjaman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pinjaman/daftar">Lihat Pilihan Pinjaman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kategori/riwayat">Lihat Riwayat Pinjaman</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="/transaksi/chart">Keranjang Belanja</a>
      </li> --}}
      
    </ul>
  </div>
</nav>
    </nav>
    </div>
</div>

@yield('content')

    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>