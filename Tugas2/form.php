<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="desainform.css">
</head>
<body>
<?php include "validasi.php" ?>
	<div class="content">
		<h1>Registration Form</h1>
		<fieldset>
			<legend>Person Detail</legend>
		<form name="formReg" method="POST">
			<div class="field">
				<label>Surename:</label>
				<input type="text" id="sname" placeholder="Enter Surename" name="sname" value="<?php echo $sname;?>"/>
				<span class="error"><?php echo $snameErr;?></span>
			</div>
			<div class="field">
				<label>Firstname:</label>
				<input type="text" id="fname" placeholder="Enter Firstname" name="fname" value="<?php echo $fname;?>"/>
				<span class="error"><?php echo $fnameErr;?></span>
			</div>
			<div class="field">
				<label>Email Address:</label>
				<input type="text" id="email" placeholder="Enter Email Address" name="email" value="<?php echo $email;?>"/>
				<span class="error"><?php echo $emailErr;?></span>
			</div>
			<div class="field">
				<label>Mobile Number:</label>
				<input type="text" id="notelp" placeholder="Enter Your Mobile Number" name="notelp" value="<?php echo $notelp;?>"/>
				<span class="error"><?php echo $notelpErr;?></span>
			</div>
			<div class="field">
				<label>Password:</label>
				<input type="password" id="pass" placeholder="Enter Password" name="pass" value="<?php echo $pass;?>"/>
				<span class="error"><?php echo $passErr;?></span>
			</div>
			<div class="field">
				<label>Confirm Password:</label>
				<input type="password" id="confpass" placeholder="Enter Confirm Password" name="confpass" value="<?php echo $confpass;?>"/>
				<span class="error"><?php echo $confpassErr;?></span>
			</div>
			<br>
			<div class="button">
				<input type="submit" value="Register" name="register"/>
				<input type="reset" value="Reset" name="reset"/>
			</div>
		</form>
		</fieldset>
	</div>
</body>
</html>