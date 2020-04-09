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
		<br/>
		<br/>
		<?php
			include "koneksi.php";
			$nim = $_GET['nim'];
			$data = mysqli_query($koneksi,"SELECT * from mahasiswa WHERE nim='$nim'") or die(mysqli_error());
			$no = 1;
			while($d = mysqli_fetch_array($data)){
				?>
					<table>
						<tr>
							<td>NIM</td>
							<td>: <?php echo $d['nim']?></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>: <?php echo $d['nama']?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>: <?php echo $d['alamat']?></td>
						</tr>
					</table>
				<?php
			}
		?>
		<a href="latihan1.11.full.php"><<< Kembali Lihat Semua Data</a>
	</body>
</html>