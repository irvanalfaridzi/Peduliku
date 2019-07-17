<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="./Gambar/icon_peduliku.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Peduliku</title>
</head>

<body>
  <?php
  include 'koneksi/koneksi.php';
  session_start();
  ?>
  <!-- Awal Navbar -->
  <nav class="my-navbar navbar sticky-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php">
      <img src="Gambar/peduliku.png" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Berita/berita.php">Berita</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a class="nav-link" href="./masuk.php">Masuk</a>
        </li>
        <li>
          <a class="nav-link" href="./daftar.php">Daftar</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Awal Banner -->
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid" src="./Gambar/undraw_gifts_btw0.svg" alt="">
        </div>
        <div class="banner-text col-lg-6">
          <h6 class="color-text">Mari bersama membangun kehidupan yang layak</h6>
          <h2 class="color-text">Ayo Saling Membantu</h2>
          <p class="color-text">Kalau tidak sekarang berdonasi, kapan lagi? Kalau bukan kita, siapa lagi?</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Banner -->

  <!-- Awal Layanan -->

  <section class="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="box-layanan card bg-dark text-white">
            <img src="./Gambar/undraw_best_place_r685.svg" class="img-fluid card-img-top" alt="Donasi">
            <div class="card-body">
              <h5 class="card-title">Donasi</h5>
              <p class="card-text">User Dapat Melakukan donasi kepada korban bencana yang ditujukan.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box-layanan card bg-dark text-white">
            <img src="./Gambar/undraw_collab_8oes.svg" class="img-fluid card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Forum</h5>
              <p class="card-text">Forum chat yang bisa digunakan untuk bertukar informasi antara user.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box-layanan card bg-dark text-white">
            <img src="./Gambar/undraw_connected_world_wuay.svg" class=" img-fluid card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Berita</h5>
              <p class="card-text">Informasi Tentang Bencana Alam yang terjadi di Indonesia.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Layanan -->

  <!-- Awal Berita -->
  <section class="berita">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="color-text">Berita</h2>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Berita -->

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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>