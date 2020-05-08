<?php  
	session_start();
	include 'koneksi.php';
	$code = session_id();
	$produk3 = $_POST['produk3'];
	$data = mysqli_query($koneksi,"SELECT code from dataproduk WHERE code='$code'");
	$ketemu = mysqli_num_rows($data);
	if ($ketemu==0){
		mysqli_query($koneksi, "insert into dataproduk (code, produk3) values('$code', '$produk3')");
	} else {
		mysqli_query($koneksi,"UPDATE dataproduk SET produk3='$produk3' WHERE code='$code'");
	}
	header("location:index.php?page=kue3&pesan=tambah");
?>