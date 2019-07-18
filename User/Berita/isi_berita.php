<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="../../Gambar/icon_peduliku.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="../../style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Peduliku</title>
</head>

<body>
<?php
  include '../../koneksi/koneksi.php';
  session_start();
  ?>
  <!-- Awal Navbar -->
  <nav class="my-navbar navbar sticky-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="../user.php">
      <img src="../../Gambar/peduliku.png" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../user.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berita.php">Berita</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="btn-group">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="../logout.php">Logout</a>
          </div>
        </div>
      </ul>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Koneksi dan mengambil id_berita dari index.php -->
  <?php
  include '../../koneksi/koneksi.php';
  $id_berita = $_POST['id_berita'];
  $_SESSION['id'] = $id_berita;
  ?>

  <!-- isi berita -->
  <?php
  $sql = "SELECT count(id_berita) as donatur, g.nama,b.id, judul, deskripsi, tgl_kejadian, kategori, lokasi, tgl_start_donasi, tgl_selesai_donasi, jml_donasi, datediff(tgl_selesai_donasi, tgl_start_donasi) as selisih FROM berita b join gambar g on b.id = g.id JOIN donate d on b.id = d.id_berita where b.id = '$id_berita' GROUP BY b.id";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  ?>
  <section class="berita-file">
    <div class="container">
      <div class="row">
        <!-- Mengambil data donatur, perolehan, sisa hari -->
        <?php
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          $i = 1;
          while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-lg-12">
              <h2 style="padding-bottom: 2%" class="judul-teks"><?php echo $row['judul']; ?></h2>
            </div>
            <div class="col-lg-8">
              <img class="img-fluid" src=<?php echo '../../images/' . $row['nama']; ?> alt="Tsunami">
              <p style="padding-top: 2%"><?php echo $row['deskripsi']; ?></p>
              <section id="forum">
                <h2 style="padding-top: 2%" class="judul-teks">Forum Berita</h2>
                <h1>COMING SOON</h1>
              </section>
            </div>
            <div class="col-lg-4">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Donatur
                  <span class="badge badge-primary badge-pill"><?php echo $row['donatur']; ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Perolehan
                  <span class="badge badge-primary badge-pill"><?php echo 'Rp ' . $row['jml_donasi']; ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Sisa Hari
                  <span class="badge badge-primary badge-pill"><?php echo $row['selisih'] . '&nbsp hari'; ?></span>
                </li>
                <a style="margin-top:5%;" href="donasi.php" class="btn btn-success" role="button">Donasi Sekarang</a>
                <a style="margin-top:5%;" href="#forum" class="btn btn-primary" role="button">Buka Forum Sekarang</a>
              </ul>
            </div>
          <?php
          }
        }
        ?>
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
            <img src="../../Gambar/peduliku.png" alt="..." class="rounded">
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