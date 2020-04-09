<!DOCTYPE html>
<html>
	<head>
		<title>Latihan 11</title>
	</head>
	<body>
		<h3>Data Mahasiswa</h3>
		<h5>Menambahkan data</h5>
		<form method="post" action="latihan1.11.tambah.php">
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
					<td><input type="submit" value="Simpan"></input></td>
				</tr>
			</table>
		</form>
		<h5>Menampilkan data mahasiswa</h5>
		<table border="1">
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Menu</th>
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
					<td>
						<a href="latihan1.11.lihat.php?nim=<?php echo $d['nim'];?>">Lihat</a>
						<a href="latihan1.11.edit.php?nim=<?php echo $d['nim'];?>">Edit</a>
						<a href="latihan1.11.hapus.php?nim=<?php echo $d['nim'];?>" onclick="return confirm('Anda yakin mau mengapus data ini?')">Hapus</a>
					</td>
				</tr>
				<?php
			}
			?>
		</table>
	</body>
</html>