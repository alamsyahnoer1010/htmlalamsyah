<?php
	session_start();
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$data = mysqli_query($koneksi,"select * from datapengguna where nama='$nama' and password='$password'");
	$cek = mysqli_num_rows($data);
	if($cek > 0){
		header("location:index.php?page=home");
	}
	else {
		header("location:index.php?page=login&pesan=salah");
	}
?>