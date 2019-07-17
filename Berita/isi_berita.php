<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="../Gambar/icon_peduliku.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="../style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Peduliku</title>
</head>

<body>
  <!-- Awal Navbar -->
  <nav class="my-navbar navbar sticky-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="../index.php">
      <img src="../Gambar/peduliku.png" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berita.php">Berita</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a class="nav-link" href="../masuk.php">Masuk</a>
        </li>
        <li>
          <a class="nav-link" href="../daftar.php">Daftar</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- isi berita -->
  <section class="berita-file">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 style="padding-bottom: 2%" class="judul-teks">Judul Berita</h2>
        </div>
        <div class="col-lg-8">
          <img class="img-fluid" src="../Gambar/tsunami.jpg" alt="Tsunami">
          <p style="padding-top: 2%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
          <section id="forum">
            <h2 style="padding-top: 2%" class="judul-teks">Forum Berita</h2>
            <h1>COMING SOON</h1>
          </section>
        </div>
        <div class="col-lg-4">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Donatur
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Perolehan
              <span class="badge badge-primary badge-pill">Rp 1.500.555</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Sisa Hari
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <a style="margin-top:5%;" href="donasi.php" class="btn btn-success" role="button">Donasi Sekarang</a>
            <a style="margin-top:5%;" href="#forum" class="btn btn-primary" role="button">Buka Forum Sekarang</a>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- isi berita -->

  <!-- Footer -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <center>
            <img src="./Gambar/peduliku.png" alt="..." class="rounded">
            <p class="color-text">Tanggap Bencana Indonesia</p>
          </center>
        </div>
        <div class="col-lg-4"></div>
      </div>
      <center>
        <p class="color-text">copyright © 2019 Peduliku all right reserved</p>
      </center>
    </div>
  </section>
  <!-- Footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>