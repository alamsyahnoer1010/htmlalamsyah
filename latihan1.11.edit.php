<!DOCTYPE html>
<html>
	<head>
		<title>Membuat CRUD Dengan PHP dan MySQL - Menampilkan data diri database</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="judul">
			<h1>Detail data</h1>
		</div>
		<br/>
		<a href="latihan1.11.full.php">Lihat Semua Data</a>
		<br/>
		<h3>Edit Data</h3>
		<?php
			include "koneksi.php";
			$nim = $_GET['nim'];
			$data = mysqli_query($koneksi,"SELECT * from mahasiswa WHERE nim='$nim'") or die(mysqli_error());
			$no = 1;
			while($d = mysqli_fetch_array($data)){
				?>
					<form action="latihan1.11.update.php" method="post">
						<table>
							<tr>
								<td>Nama</td>
								<td>
									<input type="hidden" name="nim" value="<?php echo $d['nim']?>">
									<input type="text" name="nama" value="<?php echo $d['nama']?>">
								</td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>
									<input type="text" name="alamat" value="<?php echo $d['alamat']?>">
								</td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Simpan"></td>
							</tr>
						</table>
					</form>
				<?php
			}
		?>
	</body>
</html>