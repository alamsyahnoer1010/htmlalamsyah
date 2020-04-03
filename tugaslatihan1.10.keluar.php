<?php
	session_start();
	session_destroy();
	header("location:tugaslatihan1.10.php?pesan=keluar");
?>