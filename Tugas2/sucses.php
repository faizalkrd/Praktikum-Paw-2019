<!DOCTYPE html>
<html>
<head>
	<title>Login Succes</title>
	<link href="myForm.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include "validasi.php";?>
	<div class="sukses">
		<h2>LOGIN SUCCES</h2>
		<b>KEEP WELL YOUR PRIVATION. THANK'S</b>
		<?php 
			if(isset ($_POST["sname"])){
				echo $sname;
			}
		?>
	</div>
</body>
</html>