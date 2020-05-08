<?php
	session_start();
	session_id();
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "salah"){
			echo '<script type="text/javascript">
  			alert("Nama atau Password yang Anda Masukkan salah");
			</script>';
		}else if($_GET['page'] == "keluar"){
			echo "Anda telah logout dari sistem";
			echo "<br>";
		}
	}	
?>
<div id="produk">
	<table align="center" height="490px">
		<tr>
			<td width="500" align="left"><img src="djvstock191134955.png" width="400px" height="400px"></td>
			<td width="300">
				<font face="mileadilan" size="10">Login</font>
				<hr size="2">
				<form method="post" action="cek.php">
					<table align="left">
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" placeholder="Masukkan Nama Anda"></input></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input type="password" name="password" placeholder="Masukkan Password Anda"></input></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" value="Login"></input></td>
						</tr>
						<tr>
							<td colspan="3">Jika belum membuat akun pelanggan, silahkan klik <a href="index.php?page=register">register</a></td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
	</table>
</div>