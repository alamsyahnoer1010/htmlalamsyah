<?php
	if (isset($_COOKIE['username'])){
		echo "<h1>Cookie 'username' ada. </h1><br> Isinya : " .$_COOKIE['username'];
	}else{
		echo "<h1>Cookie 'username' TIDAK ADA";
	}

	if (isset($_COOKIE['nama_lengkap'])){
		echo "<h1>Cookie 'nama_lengkap' ada. </h1> <br> Isinya :  " .$_COOKIE['nama_lengkap'];
	}else{
		echo "<h1> Cookie 'nama_lengkap' TIDAK ADA </h1>";
	}
	echo "<h2>Klik <a href='latihan1.10.cookies3.php'> disini </a> untuk menghapus cookies";
?>