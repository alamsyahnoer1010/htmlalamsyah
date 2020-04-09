<?php
	include 'koneksi.php';
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama', alamat='$alamat' WHERE nim='$nim'");
	header("location:latihan1.11.full.php?pesan=update");
?>