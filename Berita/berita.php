<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="../Gambar/icon_peduliku.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="../style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Peduliku</title>
</head>

<body>
  <?php
  include '../koneksi/koneksi.php';
  session_start();
  ?>
  <!-- Awal Navbar -->
  <nav class="my-navbar navbar sticky-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="../index.php">
      <img src="../Gambar/peduliku.png" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item active">
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

  <!-- daftar berita -->

  <section class="berita-file">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Berita</h2>
          <hr>
        </div>
        <!-- ambil data berita -->
        <?php
        $sql = "SELECT b.id,judul, deskripsi,tgl_kejadian, kategori, lokasi, tgl_start_donasi,tgl_selesai_donasi, jml_donasi, count(id_berita) as donatur, g.nama, datediff(tgl_selesai_donasi, tgl_start_donasi) as selisih FROM `berita` b left join donate d on b.id = d.id_berita JOIN gambar g ON b.id = g.id GROUP BY b.id";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          $i = 1;
          while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-lg-4 kartu">
              <div class="card">
                <form action="isi_berita.php" method="post">
                  <input hidden type="text" name="id_berita" value=<?php echo $row['id']; ?>>
                  <img style="height:200px;" src=<?php echo '../images/' . $row['nama']; ?> class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="./Berita/isi_berita.php"><?php echo $row['judul']; ?></a></h5>
                    <p class="card-text">
                      <div class="row">
                        <div class="col-lg-6">
                          DONATUR <br>
                          <span><?php echo $row['donatur']; ?></span></li>
                          <hr>
                        </div>
                        <div class="col-lg-6">
                          PEROLEHAN <br>
                          <span><?php echo 'Rp ' . $row['jml_donasi']; ?></span>
                          <hr>
                        </div>
                      </div>
                    </p>
                    <input type="submit" class="btn btn-primary" value="Lihat Berita">
                  </div>
                </form>
              </div>
            </div>
          <?php
          }
        }
        ?>
      </div>
    </div>
  </section>
  <!-- daftar berita -->

  <!-- Footer -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <center>
            <img src="../Gambar/peduliku.png" alt="..." class="rounded">
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