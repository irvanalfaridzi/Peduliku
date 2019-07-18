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
                <li class="nav-item">
                    <a class="nav-link" href="../user.php">Home</a>
                </li>
                <li class="nav-item active">
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

    <?php
    include '../../koneksi/koneksi.php';
    $use = $_SESSION['username'];
    $sql_metod = "SELECT id_metod, nama_metod FROM metode_bayar";
    $metode = mysqli_query($conn, $sql_metod) or die(mysqli_error($conn));
    $profile = "SELECT email from user where username = '$use'";
    $profiles = mysqli_query($conn, $profile) or die(mysqli_error($conn));
    ?>

    <!-- isi donasi -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center donasi">
                <form action="simpan_donasi.php" method="post">
                    <h1>Beri Donasi Sekarang!</h1><br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input name="nominal" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Masukkan jumlah donasi">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Metode Pembayaran</label>
                        </div>
                        <select name="metode" class="custom-select" id="inputGroupSelect01">
                            <?php
                            if (mysqli_num_rows($metode) > 0) {
                                // output data of each row
                                while ($met = $metode->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $met['nama_metod']; ?>"><?php echo $met['nama_metod']; ?></option>
                                <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <input disabled name="nama_lengkap" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1" value=<?php echo $_SESSION['username']; ?>>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="anonim" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <input disabled type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Donasi sebagai anonymous">
                    </div>
                    <?php
                    if (mysqli_num_rows($profiles) > 0) {
                        // output data of each row
                        while ($prof = $profiles->fetch_assoc()) {
                            ?>
                            <div class="input-group mb-3">
                                <input disabled name="emailno" type="text" class="form-control" placeholder="Masukkan email atau nomor whatsapp" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $prof['email']; ?>">
                            </div>
                        <?php
                        }
                    }
                    ?>
                    <div class="input-group mb-3">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <input type="submit" name="donasi" value="Lanjutkan Donasi" class="btn btn-success">
                                Punya akun? <a href="masuk.html">Masuk</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- isi donasi -->

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