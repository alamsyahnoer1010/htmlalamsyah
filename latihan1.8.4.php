<!DOCTYPE html>
<html>
	<head>
		<title>Demo Variabel</title>
	</head>
	<body>
		<?php // sintak untuk mengawali bahasa php
			$bil = 5; // membuat variabel dan memberi nilai variabel
			var_dump($bil); // mencetak nilai pada variabel beserta tipe datanya
			// Output : int(5)
			$var = ""; // membuat variabel dan memberi nilai variabel
			var_dump($var); // mencetak nilai pada variabel beserta tipe datanya
			// Output : string (0)
			$var = null; // membuat variabel dan memberi nilai variabel
			var_dump($var); // mencetak nilai pada variabel beserta tipe datanya
			// Output : NULL
			isset($var) // memeriksa apakah suatu variabel di-set atau tidak
		?> <!-- sintak untuk mengakhiri bahasa php -->
	</body>
</html>