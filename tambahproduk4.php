<?php  
	session_start();
	include 'koneksi.php';
	$code = session_id();
	$produk4 = $_POST['produk4'];
	$data = mysqli_query($koneksi,"SELECT code from dataproduk WHERE code='$code'");
	$ketemu = mysqli_num_rows($data);
	if ($ketemu==0){
		mysqli_query($koneksi, "insert into dataproduk (code, produk4) values('$code', '$produk4')");
	} else {
		mysqli_query($koneksi,"UPDATE dataproduk SET produk4='$produk4' WHERE code='$code'");
	}
	header("location:index.php?page=kue4&pesan=tambah");
?>