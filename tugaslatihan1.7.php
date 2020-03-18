<!DOCTYPE html>
<html>
	<head>
		<title>Tugas Latihan Kasus</title>
	</head>
	<body>
		<h2>Data Mahasiswa</h2>
		<br>
		<h3>Menambahkan data mahasiswa</h3>
		<br>
		<form method="post" action="latihan1.7.3.php">
			<table>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim"></input></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></input></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat"></input></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></input></td>
				</tr>
			</table>
		</form>
		<br>
		<h3>Menampilkan data mahasiswa</h3>
		<table border="1">
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
			</tr>
			<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from mahasiswa");
			while ($d = mysqli_fetch_array($data)) {
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
				</tr>
				<?php
			}
			?>
		</table>
	</body>
</html>