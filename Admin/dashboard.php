<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
} else {
    $username = $_SESSION['username'];
}
?>
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
    ?>
    <!-- Awal Navbar -->
    <nav class="my-navbar navbar sticky-top navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="dashboard.php">
            <span class="navbar-brand mb-0 h1">Dashboard Peduliku</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <div class="btn-group dropleft">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['username']; ?>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- isi dashboard -->
    <section class="isi_dash">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Berita</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Donatur</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <h3>Buat Berita</h3>
                            <?php
                            $sql = "SELECT id_kategori, nama_kategori FROM kategori";
                            $result = $conn->query($sql);
                            ?>
                            <form action="simpan_berita.php" method="post" enctype="multipart/form-data">
                                <table>
                                    <tr>
                                        <td>Upload gambar berita :</td>
                                        <td><input type="file" name="gambar"></td>
                                    <tr>
                                    <tr>
                                        <td>Judul Berita : </td>
                                        <td><input type="text" name="judul"></td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi Berita : </td>
                                        <td>
                                            <textarea name="deskripsi" rows="10" cols="30">
                    </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Kejadian Berita : </td>
                                        <td><input type="date" name="tgl"></td>
                                    </tr>
                                    <tr>
                                        <td>Kategori : </td>
                                        <td>
                                            <select name="kategori">
                                                <?php
                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<option value='" . $row['nama_kategori'] . "'>" . $row['nama_kategori'] . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi :</td>
                                        <td><input type="text" name="lokasi"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Mulai Donasi : </td>
                                        <td><input type="date" name="mulai_donasi"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Selesai Donasi : </td>
                                        <td><input type="date" name="selesai_donasi"></td>
                                    </tr>
                                    <tr>
                                        <td align="right" colspan="2">
                                            <input type="submit" name="simpan" value="simpan">
                                            <input type="reset" value="reset form">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <?php
                            $conn->close();
                            ?>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <h3>Tabel Donatur</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir isi -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>