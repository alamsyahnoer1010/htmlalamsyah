<?php
	session_start();
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$data = mysqli_query($koneksi,"select * from tabellogin where username='$username' and password='$password'");
	$cek = mysqli_num_rows($data);
	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:tugaslatihan1.10.home.php");
	}
	else {
		header("location:tugaslatihan1.10.php?pesan=gagal");
	}
?>