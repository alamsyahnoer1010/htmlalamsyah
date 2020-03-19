<!DOCTYPE html>
<html>
	<head>
		<title>Seleksi switch</title>
	</head>
	<body>
		<?php // sintak untuk mengawali bahasa php
			$i = 0; // membuat variabel dan memberi nilai variabel
			if ($i == 0){ // untuk melakukan operasi percabangan if
				echo "i equals 0"; // mencetak kalimat i equals 0
			} elseif ($i == 1) { // jika statement 1 salah maka masuk ke statement 2 (elseif)
				echo "i equals 1"; // mencetak kalimat i equals 1
			} elseif ($i == 2) { // jika statement 1 salah maka masuk ke statement 3 (elseif)
				echo "i equals 2"; // mencetak kalimat i equals 2
			}
			// Ekuivalen, dengan pendekatan switch
			switch ($i) { // metode operasi percabangan yang berisikan case
				case 0: // case ini aktif jika sesuai dengan identitas case nya 
					echo "i equals 0"; // mencetak kalimat i equals 0
					break; // jika case telah terpilih maka akan keluar dari operasi switch case dan tidak berlanjut ke case selanjutnya
				case 1: // case ini aktif jika sesuai dengan identitas case nya 
					echo "i equals 1"; // mencetak kalimat i equals 1
					break; // jika case telah terpilih maka akan keluar dari operasi switch case dan tidak berlanjut ke case selanjutnya
				case 2: // case ini aktif jika sesuai dengan identitas case nya 
					echo "i equals 2"; // mencetak kalimat i equals 2
					break; // jika case telah terpilih maka akan keluar dari operasi switch case dan tidak berlanjut ke case selanjutnya
			}
		?> <!-- sintak untuk mengakhiri bahasa php -->
	</body>
</html>