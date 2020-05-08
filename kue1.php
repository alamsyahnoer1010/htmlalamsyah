<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "tambah"){
			echo '<script type="text/javascript">
  			alert("Pesanan Anda telah tersimpan");
			</script>';
		}
	}
?>
<div id="produk">
	<table align="center" height="490px">
		<tr>
			<td width="500" align="left"><img src="Summer-Sangria-Cake-4.jpg" width="400px" height="400px"></td>
			<td width="500">
				<font size="8" face="Arial">Summer Sangria Cake</font>
				<br><font size="6" face="Arial" color="#D6A831">Rp. 200.000</font>
				<hr size="2">
				<font size="5">Deskripsi Produk:</font>
				<font size="3">
					<br>Summer Sangria Cake merupakan sebuah kue yang bercita rasa buah - buahan dan sangat cocok untuk para penikmat buah mencoba kue ini, dengan sensasi kelembutan kue yang unik, menciptakan harmoni didalam rasa yang tak pernah Anda bayangkan.
				</font>
				<hr size="2">
				<form method="post" action="tambahproduk1.php">
					<table>
						<tr>
							<td><input type="number" min="1" name="produk1"></td>
						</tr>
						<tr>
							<td><input type="submit" value="Masukkan Keranjang"></td>
						</tr>
					</table>
				</form>
				<form method="post" action="index.php?page=checkout">
					<table>
						<tr>
							<td><input type="submit" value="Checkout"></td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
	</table>			
</div>