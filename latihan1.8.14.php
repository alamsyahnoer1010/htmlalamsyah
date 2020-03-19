<!DOCTYPE html>
<html>
	<head>
		<title>Loop foreach</title>
	</head>
	<body>
		<?php // sintak untuk mengawali bahasa php
			$arr = array(1, 2, 3, 4); // membuat variabel dan memberi nilai variabel berupa array
			foreach ($arr as $value) { // peryataan perulangan foreach. yang mana nilai dari variabel $arr akan disimpan di variabel $value
				echo $value; // mencetak nilai variabel $value
			}
		?> <!-- sintak untuk mengakhiri bahasa php -->
	</body>
</html>