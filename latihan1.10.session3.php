<?php
	session_start();
	if (isset($_SESSION['login'])){
		unset ($_SESSION);
		session_destroy();
		echo "<h1>Kamu sudah berhasil logout/keluar</h1>";
		echo "<h1>Klik <a href='latihan1.10.session.php'> disini </a> untuk login lagi.<br> Kamu tidak bisa masuk ke <a href='latihan1.10.session2.php'>Home (beranda)</a> lagi.</h2>";
	}
?>