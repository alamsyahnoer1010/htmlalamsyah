<!DOCTYPE html>
<html>
	<head>
		<title>Casting Tipe</title>
	</head>
	<body>
		<?php // sintak untuk mengawali bahasa php
			$str = '123abc'; // membuat variabel dan memberi nilai variabel
			// Casting nilai variabel $str ke integer
			$bil = (int) $str; // $bil = 123
			echo gettype($str); // menampilkan tipe data dari variabel
			// Output : string
			echo gettype($bil); // menampilkan tipe data dari variabel
			// Output : integer
		?> <!-- sintak untuk mengakhiri bahasa php -->
	</body>
</html>