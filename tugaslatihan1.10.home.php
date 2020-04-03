<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<?php
			session_start();
			if($_SESSION['status'] != "login"){
				header("location:tugaslatihan1.10.php?pesan=belum_login");
			}
		?>
		<h3>Assalamualaikum, <?php echo $_SESSION['username']; ?> Selamat anda telah berhasil login.</h3>
		<br>
		<h4>Untuk logout silahkan klik <a href="tugaslatihan1.10.keluar.php">disini</a></h4>
	</body>
</html>