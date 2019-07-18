<?php
        include "../koneksi/koneksi.php";
        $username = $_POST['username'];
        $pass = $_POST['password'];	
        $email = $_POST['email'];
        $address = $_POST['address'];
        $name = $_POST['name'];

        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];

        $sql = "SELECT * FROM user WHERE username = '$username'";
        $query = $conn->query($sql);
        if($query->num_rows != 0) {
            echo "<div align='center'><h2 class='title-a'>Username or Email Already Registered!</h2><a href='registrasi.php'>Back</a></div>";
        
        } else {
            if(!$username || !$pass || !$email || !$address || !$name) {
                echo "<div align='center'>Terdapat data yang kosong! <a href='../daftar.php'>Kembali</a>";
            } else {
                $data = "INSERT INTO user VALUES ('$username', '$pass', '$email', '$address', '$name')";
                $simpan = $conn->query($data);
                if($simpan) {
                    echo "<div align='center'><h2 class='title-a'>Registrasi Sukses!</h2>Silahkan <a href='../masuk.php'>Login</a></div>";
                } else {
                    echo "<div align='center'><h2 class='title-a'>Registrasi Gagal!</h2> Silahkan <a href='../daftar.php'>Coba Lagi!</a></div>";
                }
            }
        }

        // Set path folder tempat menyimpan gambarnya
        $path = "../images/".$nama_file;
        if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
            // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
            if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                // Proses upload
                if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
                    // Jika gambar berhasil     diupload, Lakukan :  
                    // Proses simpan ke Database
                    $query = "INSERT INTO img(id_img,nama,ukuran,tipe,username) VALUES(NULL,'".$nama_file."','".$ukuran_file."','".$tipe_file."','".$username."')";
                    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      
                    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                        // Jika Sukses, Lakukan :
                        // header("location: index.php"); // Redirectke halaman index.php
                        //echo 'file gambar berhasil terupload';
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
            echo "<br><a href='form.php'>Kembali Ke Form</a>";
        }
