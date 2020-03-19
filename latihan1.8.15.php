<?php
	// Contoh prosedur
	function do_print(){
		//  Mencetak informasi  timestamp
		echo time();
	}
	// Memanggil prosedur
	do_print();
	echo '<br />'; // mencetak sintak break
	// Contoh fungsi penjumlahan
	function  jumlah ($a, $b){
		return ($a + $b); // mengembalikan suatu nilai operasi penjumlahan
	}
	echo jumlah (2,3); // memberi nilai pada prameter fungsi jumlah
	// Output 5
?>