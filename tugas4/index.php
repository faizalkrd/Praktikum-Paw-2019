<?php 
	session_start();
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
		<li>
			<?php 
			if(isset($_SESSION["user"])):
			?>
			<a href="logout.php">Logout</a>
			<?php
			else: 
			?>
			<a href="login.php">Login</a>
			<?php 
			endif;
			?>
		</li>
		<li><a href="private1.php">Halaman Detail Data 1</a></li>
		<li><a href="private2.php">Halaman Detail Data 2</a></li>
	</ul>
</div>
<table>
<tr>
	<td><img src="pic/ijazah.jpg" alt="fotoku" width="200" height="250"></td>
</tr>
	<tr>
		<td>Akhmad Faizal Anshori</td>
	</tr>
	<tr>
		<td>160411100146</td>
	</tr>
	<tr>
		<td>Teknik Informatika</td>
	</tr>
	<tr>
		<td>Fakultas Teknik</td>
	</tr>
	<tr>
		<td>Universitas Trunojoyo Madura</td>
	</tr>
</table>
</body>
</html>