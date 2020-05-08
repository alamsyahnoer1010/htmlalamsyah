<?php
	session_start();
	include 'koneksi.php';
	$sid = session_id();
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$provinsi = $_POST['provinsi'];
	$kabupaten = $_POST['kabupaten'];
	$kecamatan = $_POST['kecamatan'];
	$kelurahan = $_POST['kelurahan'];
	$kodepos = $_POST['kodepos'];
	$telpon = $_POST['telpon'];
	mysqli_query($koneksi, "insert into datapengguna (code, nama, alamat, provinsi, kabupaten, kecamatan, kelurahan, kodepos, telpon) values('$sid', '$nama', '$alamat', '$provinsi', '$kabupaten', '$kecamatan', '$kelurahan', '$kodepos', '$telpon')");
	session_regenerate_id();
	header("location:index.php?page=checkout&pesan=masuk");
?>