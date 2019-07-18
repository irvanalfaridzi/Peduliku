<?php
session_start();
include '../../koneksi/koneksi.php';
$nominal = $_POST['nominal'];
$metode = $_POST['metode'];
$tgl_donasi = date('d-m-y');
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$profile = "SELECT * from user where username = '$username'";
$profiles = mysqli_query($conn, $profile) or die(mysqli_error($conn));

if (mysqli_num_rows($profiles) > 0) {
    // output data of each row
    while($prof = $profiles->fetch_assoc()) {
          $nm_lengkap = $prof['name'];
          $emailno = $prof['email'];
    }
  }

$sql = "SELECT COUNT(id_user) as id_user FROM donate";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $jml = $row['id_user'];
    }
    $i = $jml + 1;
    $id_user = "usr" . $i;
    $id_donasi = 'dns' . $i;
} else {
    $id_user = 'usr1';
    $id_donasi = 'dns1';
}

if (isset($_POST['anonim'])) {
    $nm_lengkap = 'Anonimus';
}

$sql = "INSERT INTO donate (id_user, id_berita, tgl_donasi, nilai_donasi, id_donasi, metode, nama_lengkap, email_nomor)
        VALUES ('$id_user', '$id', '$tgl_donasi', '$nominal', '$id_donasi', '$metode', '$nm_lengkap', '$emailno')";

// update nilai donasi di berita
$sql_berita = "SELECT id,jml_donasi FROM berita WHERE id='$id'";
$jml_donasi = mysqli_query($conn, $sql_berita) or die(mysqli_error($conn));
if (mysqli_num_rows($jml_donasi) > 0) {
    // output data of each row
    while ($row = $jml_donasi->fetch_assoc()) {
        $donasi_update = $row['jml_donasi'] + $nominal;
    }
}
$sql_update_donasi = "UPDATE berita SET jml_donasi=$donasi_update WHERE id='$id'";
if ($conn->query($sql) === TRUE && $conn->query($sql_update_donasi) === TRUE) {
    echo "<script>alert('Donasi Berhasil')</script>";
    echo "<script>window.location.href=\"../user.php\"</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// if ($conn->query($sql_update_donasi) === TRUE) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . $conn->error;
// }
