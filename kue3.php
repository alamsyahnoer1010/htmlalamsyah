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
			<td width="500" align="left"><img src="Raspberry-Cream-Cheese-Pastries.jpg" width="400px" height="400px"></td>
			<td width="500">
				<font size="8" face="Arial">Raspberry Cream Cheese Pastries</font>
				<br><font size="6" face="Arial" color="#D6A831">Rp. 150.000</font>
				<hr size="2">
				<font size="5">Deskripsi Produk:</font>
				<font size="3">
					<br>Raspberry Cream Cheese Pastries merupakan pastry dengan rasa yang sangat unik. Sentuhan rasa Raspberry yang asam kemudian kombinasi dengan rasa cream cheese nikmat berbalut coklat di luarnya. Merupakan kombinasi yang tiada duanya.
				</font>
				<hr size="2">
				<form method="post" action="tambahproduk3.php">
					<table>
						<tr>
							<td><input type="number" min="1" name="produk3"></td>
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