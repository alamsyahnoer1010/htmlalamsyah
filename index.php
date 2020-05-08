<!DOCTYPE html>
<html>
	<head>
		<title>ANM Bakery</title>
		<link rel="stylesheet" type="text/css" href="layout.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="nav">
				<table cellspacing="25">
					<tr>
						<td><a href="index.php?page=home" style="text-decoration: none;"><font color="white">Home</a></td>
						<td><a href="index.php?page=product" style="text-decoration: none;"><font color="white">Product</a></td>
						<td><a href="index.php?page=contact" style="text-decoration: none;"><font color="white">Contact</a></td>
						<td><a href="index.php?page=tentang" style="text-decoration: none;"><font color="white">Tentang Kami</a></td>
					</tr>
				</table>
			</div>
			<?php
				if(isset($_GET['page'])){
					$page = $_GET['page'];
					switch($page){
						case'home':
							include "home.php";
							break;
						case'checkout':
							include "checkout.php";
							break;
						case'product':
							include "produk.php";
							break;
						case'contact':
							include "kontak.php";
							break;
						case'tentang':
							include "tentang.php";
							break;
					}
				}else{
					include "home.php";
				}
			?>
			<?php
				if(isset($_GET['page'])){
					$page = $_GET['page'];
					switch($page){
						case'kue1':
							include "kue1.php";
							break;
						case'kue2':
							include "kue2.php";
							break;
						case'kue3':
							include "kue3.php";
							break;
						case'kue4':
							include "kue4.php";
							break;
					}
				}
			?>
			<?php
				if (isset($_GET['page'])){
					$page = $_GET['page'];
					if ($page == 'register'){
						include "register.php";
					}
				}
			?>
			<div id="footer">
				<center>
					<td colspan="2" height="50px"><font face="Comic Sans MS" size="3">Hak Cipta : ANM Bakery
					<br>Alamsyah Nur Muslimin</font>
				</center>
			</div>
		</div>
	</body>
</html>