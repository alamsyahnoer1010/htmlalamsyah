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
			<td width="500" align="left"><img src="easter-nest-cake.jpg" width="400px" height="400px"></td>
			<td width="500">
				<font size="8" face="Arial">Easter Nest Cake</font>
				<br><font size="6" face="Arial" color="#D6A831">Rp. 150.000</font>
				<hr size="2">
				<font size="5">Deskripsi Produk:</font>
				<font size="3">
					<br>Siapa nih yang suka coklat? ANM Bakery punya nih produk andalan dengan menggunakan bahan coklat, salah satunya ini nih Easter Nest Cake. Easter Nest Cake merupakan kue yang memiliki rasa coklat yang menawan dan sempurna. Menggunakan coklat yang berkualitas, untuk menjamin rasa dan kualitas yang didapatkan.
				</font>
				<hr size="2">
				<form method="post" action="tambahproduk4.php">
					<table>
						<tr>
							<td><input type="number" min="1" name="produk4"></td>
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