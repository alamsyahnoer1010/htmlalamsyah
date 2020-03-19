<!DOCTYPE html>
<html>
	<head>
		<title>Seleksi if-elseif</title>
	</head>
	<body>
		<?php // sintak untuk mengawali bahasa php
			$a = 10; // membuat variabel dan memberi nilai variabel
			$b = 5; // membuat variabel dan memberi nilai variabel
			if ($a > $b) { // untuk melakukan operasi percabangan if
				echo 'a lebih besar dari b'; // menampilkan kalimat a lebih besar dari b
			} elseif ($a == $b) { // jika statement 1 salah maka masuk ke statement 2 (elseif)
				echo 'a sama dengan b'; // menampilkan kalimat a sama dengan b
			} else { // jika statement 2 salah maka masuk ke sintak else
				echo 'a kurang dari b'; // menampilkan kalimat a kurang dari b
			}
		?> <!-- sintak untuk mengakhiri bahasa php -->
	</body>
</html>