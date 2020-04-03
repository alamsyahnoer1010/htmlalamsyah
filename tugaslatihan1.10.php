<!DOCTYPE html>
<html>
	<head>
		<title>Tugas Login</title>
	</head>
	<body>
		<h2>Silahkan untuk Login Terlebih dahulu</h2>
		<br>
		<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "Perhatian ! username dan password yang di inputkan salah";
					echo "<br>";
				}else if($_GET['pesan'] == "keluar"){
					echo "Anda telah logout dari sistem";
					echo "<br>";
				}else if($_GET['pesan'] == "belum_login"){
					echo "Anda tidak bisa mengakses halaman Home, silahkan untuk login terlebih dahulu";
					echo "<br>";
				}
			}
		?>
		<br>
		<form method="post" action="tugaslatihan1.10.ngeceklogin.php">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
	</body>
</html>