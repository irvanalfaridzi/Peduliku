<?php
	session_start();
	require_once("../koneksi/koneksi.php");
	$username = $_POST['username'];
	$pass = $_POST['password'];	
	$sql = "SELECT * FROM user WHERE username = '$username'";
	$query = $conn->query($sql);	
	$hasil = $query->fetch_assoc();
	$adm = "SELECT * FROM user WHERE username = 'admin'";
	$query_adm = $conn->query($adm);
	$hasil_adm = $query_adm->fetch_assoc();
	if($query->num_rows == 0) {
		echo "<div align='center'>Username Not yet Registered! <a href='login.php'>Back</a></div>";
	} else {
		if($pass <> $hasil['password']) {
			echo "<div align='center'>Wrong password! <a href='login.php'>Back</a></div>";
		} else {
			$_SESSION['username'] = $hasil['username'];
			header('location:../User/user.php');
		}
	}
?>