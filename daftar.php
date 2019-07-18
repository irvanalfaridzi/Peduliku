<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="./Gambar/icon_peduliku.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Peduliku</title>
</head>

<body>
  <!-- Awal Navbar -->
  <nav class="my-navbar navbar sticky-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php">
      <img src="./Gambar/peduliku.png" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Berita/berita.php">Berita</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a class="nav-link" href="masuk.php">Masuk</a>
        </li>
        <li>
          <a class="nav-link" href="daftar.php">Daftar</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- form regis -->
  <section class="regis">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Registrasi</h2>
          <hr>
        </div>
        <div class="col-lg-6">
          <form action="./Proses/proses_signup.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleFormControlFile1"><b>Upload foto</b></label>
              <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1"
                aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"><b>Nama Lengkap</b></label>
              <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><b>Alamat</b></label>
              <input name="address" type="text" class="form-control" id="exampleInputPassword1"
                placeholder="Alamat Tinggal">
            </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="exampleInputPassword1"><b>Email</b></label>
            <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email anda">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"><b>Username</b></label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><b>Password</b></label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
              placeholder="Pasword baru">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row mt-4">
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary w-100" value="Registrasi">
            </div>
            <div class="col-md-6">
              <button type="reset" class="btn btn-secondary w-100">Reset</button>
            </div>
          </div>
          </form>
          <br>
          <center>
            <p class="pt-4">Sudah punya akun? <a href="masuk.php"><B>Login</B></a> | Kembali ke Beranda, Klik di <a
                href="index.php"><B>sini</B></a></p>
          </center>

        </div>
      </div>
    </div>
  </section>
  <!-- form regis -->

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