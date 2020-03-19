<?php // sintak untuk mengawali bahasa php
	/**
	* Mencetak string
	* $teks nilai string
	* $bold adalah argumen opsional
	*/
	function print_teks($teks, $bold = true){ // fungsi dengan parameter variabel $teks dan $bold
		echo $bold ? '<b>' .$teks. '</b>' : $teks; // operasi yang akan diberlakukan pada saat mengakses fungsi print_teks
	}
	print_teks('Indonesiaku');
	// Mencetak dengan huruf tebal
	print_teks('Indonesiaku', false);
	// Mencetak dengan huruf reguler
?> <!-- sintak untuk mengakhiri bahasa php -->