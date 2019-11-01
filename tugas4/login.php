<?php
session_start();
$pesan = "";
if(isset($_SESSION['message'])){
	$pesan = "Anda harus login!";
}
if (isset($_POST['login']) == "Login"){
	$username = $_POST['username'];
	$password = $_POST['pass'];

	$dbc = new PDO ('mysql:host=localhost;dbname=myapp','root','');

	$statement = $dbc->prepare("SELECT * FROM admin WHERE username = '$username' AND password = SHA2('$password',0)");
	$statement -> execute();

	$cek = $statement -> rowCount() > 0;
	if($cek){
		$redirect_page = "index.php";
		if (isset($_SESSION["lanjut"])){
			$redirect_page = $_SESSION["lanjut"];
			unset($_SESSION["lanjut"]);
		}
	$_SESSION["user"] = $username;
	header("Location: ".$redirect_page);
	}
	else{
		$pesan = "Invalid Username / Password";
	}
}
?>
<!DOCTYPE html>
<html lang="">
<head>
	<title>Akhmad Faizal Anshori</title>
	<link rel="stylesheet" type="text/css" href="tugas4.css">
</head>
<body>
<form action="login.php" method="POST">
<div class="menu"> 
	<ul>
		<li><a href="index.php">Halaman Utama</a></li>
		<li><a href="private1.php">Halaman Detail Data 1</a></li>
		<li><a href="private2.php">Halaman Detail Data 2</a></li>
	</ul>
</div>
<table>
	<tr>
		<td>Username</td>
		<td><input name="username" type="text" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input name="pass" type="password" /></td>
	</tr>
	<tr>
		<td><input type="submit" value="Login" name ="login"></td>
		<td></td> 
	</tr>
</table>
</form>
</body>
</html>