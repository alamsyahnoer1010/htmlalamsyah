<?php  
	session_start();
	include 'koneksi.php';
	$code = session_id();
	$produk1 = $_POST['produk1'];
	$data = mysqli_query($koneksi,"SELECT code from dataproduk WHERE code='$code'");
	$ketemu = mysqli_num_rows($data);
	if ($ketemu==0){
		mysqli_query($koneksi, "insert into dataproduk (code, produk1) values('$code', '$produk1')");
	} else {
		mysqli_query($koneksi,"UPDATE dataproduk SET produk1='$produk1' WHERE code='$code'");
	}
	header("location:index.php?page=kue1&pesan=tambah");
?>