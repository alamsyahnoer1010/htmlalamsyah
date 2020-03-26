<!DOCTYPE html>
<html>
	<head>
		<title>Tugas Latihan 9</title>
		<style type="text/css">
			.garistabel{
				border: 3px solid #048585;
				width: 500px;
				margin: 150px auto;
			}
		</style>
		<script language="javascript" type="text/javascript">
			function check(){
				var user = doc.getElementById('username').value;
				var pass = doc.getElementById('password').value;
				if (user.replace(/[A-Za-z]{1,}$/,")=="){
					alert('Masukkan username anda (min. 1 huruf)');
					return false;
				}
				if (pass.replace(/[A-Za-z]{4,}$/,")=="){
					alert('Masukkan password anda (min. 8 huruf');
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body bgcolor="#C1F5F5">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" name="login" method="post">
				<p align="center"><?echo $status;?></p>
				<div class="garistabel">
					<table width="500" align="center" rules="groups" cellpadding="8" cellspacing="5" bgcolor="#F0FAFA">
						<tr>
							<td width="50">&nbsp;</td>
							<td align="left"><font size="10" face="Verdana" color="#55E0E0">Login</font></td>
							<td width="50">&nbsp;</td>
						</tr>
						<tbody>
						<tr>
							<td width="70"></td>
							<td><font size="3" face="verdana">Username : </font></td>
							<td width="50"></td>
						</tr>
						<tr>
							<td width="50"></td>
							<td><input type="text" name="username" size="35" id="username"/></td>
							<td width="50"></td>
						</tr>
						<tr>
							<td width="50"></td>
							<td><font size="3" face="verdana">Password : </font></td>
							<td width="50"></td>
						</tr>
						<tr>
							<td width="50"></td>
							<td><input type="password" name="password" size="35" id="password"></td>
							<td width="50"></td>
							</tr>
							<tr>
							<td width="50"></td>
							<td><input type="submit" name="submit" onclick="return check()" value="LOGIN"/></td>
							<td width="50"></td>
							</tr>
							<tr>
							<td colspan="2"></td>
							<td width="50"></td>
						</tr>
					</table>
				</div>
			</form>
			<?php 
				if (is_string($_POST['username'])){
					if ($_POST['username']=='Alamsyah'){
						echo 'Selamat datang ' . $_POST['username'];
					}
					else{
						echo 'Username anda tidak sesuai, silahkan memasukkan username kembali';
					}
				}
				if (is_string($_POST['password'])){
					if ($_POST['password']=='Alamsyahnm'){
						echo '<br /> Password anda adalah ' . $_POST['password'];
					}
					else{
						echo '<br /> Password yang anda masukkan salah, silahkan masukkan password kembali';
					}
				}
			?>
	</body>
</html>