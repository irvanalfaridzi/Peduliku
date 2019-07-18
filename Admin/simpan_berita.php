<?php
include "../koneksi/koneksi.php";
    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $tgl = $_POST['tgl'];
        $kategori = $_POST['kategori'];
        $lokasi = $_POST['lokasi']; 
        $mulai_donasi = $_POST['mulai_donasi'];
        $selesai_donasi = $_POST['selesai_donasi'];

        // Ambil Data yang Dikirim dari Form
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];

        $sql = "SELECT COUNT(id) as jmlh FROM berita";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $jml = $row['jmlh'];
            }
            $i = $jml+1;
            $id = "brt".$i;
        } else {
            $id = 'brt1';
        }

        $sql = "INSERT INTO berita (id, judul, deskripsi, tgl_kejadian, kategori, lokasi, tgl_start_donasi, tgl_selesai_donasi)
        VALUES ('$id', '$judul', '$deskripsi', '$tgl', '$kategori', '$lokasi', '$mulai_donasi', '$selesai_donasi')";

        if ($conn->query($sql) === TRUE) {
            echo '<h1>Simpan data berhasil</h1>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Set path folder tempat menyimpan gambarnya
        $path = "../images/".$nama_file;
        if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
            // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
            if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                // Proses upload
                if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
                    // Jika gambar berhasil diupload, Lakukan :  
                    // Proses simpan ke Database
                    $query = "INSERT INTO gambar(id,nama,ukuran,tipe) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."')";
                    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      
                    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                        // Jika Sukses, Lakukan :
                        // header("location: index.php"); // Redirectke halaman index.php
                        echo 'file gambar berhasil terupload';
                    }else{
                        // Jika Gagal, Lakukan :
                        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                        echo "<br><a href='form.php'>Kembali Ke Form</a>";
                    }
                }else{
                    // Jika gambar gagal diupload, Lakukan :
                    echo "Maaf, Gambar gagal untuk diupload.";
                    echo "<br><a href='form.php'>Kembali Ke Form</a>";
                }
            }else{
                    // Jika ukuran file lebih dari 1MB, lakukan :
                    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
                    echo "<br><a href='form.php'>Kembali Ke Form</a>";
            }
        }else{
            // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
            echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
            echo "<br><a href='dashboard.php'>Kembali Ke Form</a>";
        }

        $conn->close();
        echo '<br>';
        echo '<a href="dashboard.php">Isi berita lagi</a>';
        echo '<br>'; 
        echo '<br>';
    }
?>