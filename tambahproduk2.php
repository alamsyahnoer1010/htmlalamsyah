<?php  
	session_start();
	include 'koneksi.php';
	$code = session_id();
	$produk2 = $_POST['produk2'];
	$data = mysqli_query($koneksi,"SELECT code from dataproduk WHERE code='$code'");
	$ketemu = mysqli_num_rows($data);
	if ($ketemu==0){
		mysqli_query($koneksi, "insert into dataproduk (code, produk2) values('$code', '$produk2')");
	} else {
		mysqli_query($koneksi,"UPDATE dataproduk SET produk2='$produk2' WHERE code='$code'");
	}
	header("location:index.php?page=kue2&pesan=tambah");
?>