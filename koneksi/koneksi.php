<?php
$host = "localhost";
$user = "root";
$db = "DB17410100073";   
$conn=mysqli_connect($host, $user, "");
mysqli_select_db($conn, $db) or die ("Tidak terhubung ke database");
// if ($conn) {
//     echo "Koneksi berhasil";
// } else {
//     echo "Koneksi gagal";
// }
?>
