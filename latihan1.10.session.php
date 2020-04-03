<?php
	session_start();
	if (isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
			if ($user == "alamsyah" && $pass== "1003"){
				$_SESSION['login'] = $user;
				echo "<h1>Halo, kamu berhasil login!</h1>";
				echo "<h2>Klik <a href='latihan1.10.session2.php'> disini </a> untuk menuju ke halaman pemeriksaan session</h2>";
			}
	}
	else {
		?>
		<html>
			<head>
				<title>Login disini</title>
			</head>
			<body>
				<form action="" method="post">
					<h2>Login disini</h2>
					Username : <input type="text" name="user"><br>
					Password : <input type="password" name="pass"><br>
					<input type="submit" name="login" value="login">
				</form>
			</body>
		</html>
	<?php
	}
?>