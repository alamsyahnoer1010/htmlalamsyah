<?php
	session_start();
	if (isset($_SESSION['login'])){
		echo "<h1>Selamat datang, ".$_SESSION['login']."</h1>";
		echo "<h2>Halaman ini bisa tampil jika berhasi login. Ini adalah HOME (beranda) kamu.</h2>";
		echo "<h2>Klik <a href='latihan1.10.session3.php'>disini </a> untuk logout (keluar)</h2>";
	}
	else{
		die("Anda belum login! Login dulu <a href='latihan1.10.session.php'> disini </a>");
	}
?>