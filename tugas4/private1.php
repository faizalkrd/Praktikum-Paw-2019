<?php 
	session_start();
	if(!isset($_SESSION["user"])){
		$_SESSION["message"] = TRUE;
		$_SESSION["lanjut"] = "private1.php";
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="">
<head>
	<title>Akhmad Faizal Anshori</title>
	<link rel="stylesheet" type="text/css" href="tugas4.css">
</head>
<body>
<div class="menu"> 
	<ul>
		<li><a href="index.php">Halaman Utama </a></li>
		<li><a href="private2.php">Halaman Detail Data 1 </a></li>
		<li>
			<?php 
			if(isset($_SESSION["user"])):
			?>
			<a href="logout.php">Logout</a>
			<?php
			else: 
			?>
			<a href="login.php">Login Admin </a>
			<?php 
			endif;
			?>
		</li>
	</ul>
</div>
<table>
	<tr>
		<td>Nama Panggilan</td>
		<td>Faizal</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>Laki-Laki</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>JL.Diponegoro IV/95 Karangduak Sumenep</td>
	</tr>
	<tr>
		<td>Alamat Email</td>
		<td><a href="http://mail.google.com/">faizalanshori543@gmail.com</a></td>
	</tr>
</table>
</body>
</html>