<?php
	include 'koneksi.php';
	$nim = $_GET['nim'];
	mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'") or die(mysqli_error());
	header("location:latihan1.11.full.php?pesan=hapus");
?>