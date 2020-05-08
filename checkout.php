<div id="produk">
	<table align="center" height="490px">
		<tr>
			<td width="500" align="left"><img src="paying-bills-concept_1325-175.png" width="400px" height="400px"></td>
			<td width="300">
				<font size="8" face="mileadilan">Checkout</font>
				<hr size="2">
				<table>
					<tr>
						<td>
							<form action="tambah.php" method="post">
							<table>
								<tr>
									<td>Nama</td>
									<td>:</td>
									<td><input type="text" name="nama"></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td><input type="text" name="alamat"></td>
								</tr>
								<tr>
									<td>Provinsi</td>
									<td>:</td>
									<td><input type="text" name="provinsi"></td>
								</tr>
								<tr>
									<td>Kota/Kabupaten</td>
									<td>:</td>
									<td><input type="text" name="kabupaten"></td>
								</tr>
								<tr>
									<td>Kecamatan</td>
									<td>:</td>
									<td><input type="text" name="kecamatan"></td>
								</tr>
								<tr>
									<td>Kelurahan/Desa</td>
									<td>:</td>
									<td><input type="text" name="kelurahan"></td>
								</tr>
								<tr>
									<td>Kode Pos</td>
									<td>:</td>
									<td><input type="number" name="kodepos"></td>
								</tr>
								<tr>
									<td>Nomer Telepon</td>
									<td>:</td>
									<td><input type="text" name="telpon"></td>
								</tr>
								<tr>
									<td><input type="submit" value="Submit"></td>
								</tr>
								<tr>
									<td colspan="3">Anda bisa Transfer via Bank UNY:</td>
								</tr>
								<tr>
									<td colspan="3" bgcolor="white">Transfer Bank UNY – 1234567891 – ANM Bakery</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td><hr size="2"></td>
					</tr>
					<tr>
						<td>
							<?php
								include "koneksi.php";
								session_start();
								$sid = session_id();
								if(isset($_GET['pesan'])){
									if($_GET['pesan'] == "masuk"){
										echo '<script type="text/javascript">
							  			alert("Pesanan Anda sedang kami proses. Terima kasih");
										</script>';
										session_destroy();
									}
								}
								$code = $sid;
								$total = 0;
								$data = mysqli_query($koneksi,"SELECT * from dataproduk WHERE code='$code'");
								while ($d = mysqli_fetch_array($data)){
									$harga1 = $d['produk1'] * 200000;
									$harga2 = $d['produk2'] * 150000;
									$harga3 = $d['produk3'] * 150000;
									$harga4 = $d['produk4'] * 150000;
									$total = $harga1 + $harga2 + $harga3 + $harga4;
								}
								echo "Total belanja anda sebesar : Rp. ";
								echo $total;
							?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>