<?php
$snameErr = "";
$fnameErr = "";
$emailErr = "";
$notelpErr = "";
$passErr = "";
$confpassErr = "";

$sname = "";
$fname = "";
$email = "";
$notelp = "";
$pass = "";
$confpass= "";

$ceksname = 0;
$cekfname = 0;
$ceknotelp = 0;
$cekemail = 0;
$cekpass = 0;
$cekconfpass = 0;
//$_SERVER : mengambil data spesifik server seperti header, path dan lokasi script.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 //Fungsi empty() akan menghasilkan nilai false jika sebuah variabel telah diisi, dan bernilai true jika variabel tersebut belum diisi.
	if (empty($_POST["sname"])){
		$snameErr = "inputan masih kosong";
		$ceksname = 0;
	}
	else {
		$sname = test_input($_POST["sname"]);
		if (!preg_match("/^[a-zA-Z]*$/",$sname)) {
			$snameErr = "inputan hanya boleh huruf alphabets"; 
			$ceksname=0;
		}
		else{
			$ceksname=1;
		}
	}

	if (empty($_POST["fname"])) {
		$fnameErr = "inputan masih kosong";
		$cekfname=0;
	}
	else {
		$fname = test_input($_POST["fname"]);
		if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
			$fnameErr = "inputan hanya boleh huruf alphabets"; 
			$cekfname=0;
		}
		else{
			$cekfname=1;
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "inputan masih kosong";
		$cekemail=0;
	}
	else {
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "penulisan email salah"; 
			$cekemail=0;
		}
		else{
			$cekemail=1;
		}
	}
	if (empty($_POST["notelp"])) {
		$notelpErr = "inputan masih kosong";
		$ceknotelp=0;
	}
	else {
		$notelp= test_input($_POST["notelp"]);
		if (!is_numeric($_POST["notelp"])) {
			$notelpErr = "Nomor Telepon Harus Angka"; 
			$ceknotelp=0;
		}
		else if(strlen($_POST["notelp"])<10){
			$notelpErr = "No.Telp min 10 digit"; 
			$ceknotelp=0;
		}
		else if(strlen($_POST["notelp"])>13){
			$notelpErr = "No.Telp max 13 digit"; 
			$ceknotelp=0;
		}
		else{
			$ceknotelp=1;
		}
	}

	
	//validasi PASSWORD 
	if (empty($_POST["pass"])) {
		$passErr = "inputan masih kosong";
		$cekpass=0;
	}
	else {
		$pass = test_input($_POST["pass"]);
		if(strlen($_POST["pass"])<8){
			$passErr = "password tidak boleh kurang dari 8 digit"; 
			$cekpass=0;
		}
		else if(!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z]).*$/",$pass)){
			$passErr = "password alphanumeric"; 
			$cekpass=0;
		}
		else{
			$cekpass=1;
		}
	}
	

	if (empty($_POST["confpass"])) {
		$confpassErr = "inputan masih kosong";
		$cekconfpass=0;
	}
	else {
		$confpass = test_input($_POST["confpass"]);
		if($_POST["pass"]!=$_POST["confpass"] ) {
			$confpassErr = "password tidak sesuai";
			$cekconfpass=0;
		}
		else {
			$cekconfpass=1;
		}
	}
}

if($ceksname == 1 && $cekfname == 1 && $cekemail == 1 && $ceknotelp == 1 && $cekpass == 1 && $cekconfpass == 1){
	header('Location: sucses.php');
}


function test_input($data) {
  $data = trim($data);//fungsi trim() untuk menghapus karakter yang tidak diperlukan seperti ekstra spasi, tab dan baris baru
  $data = stripslashes($data);//fungsi stripslashes() untuk membuang tanda backslash (/) dari input yang dimasukkan oleh pengguna
  $data = htmlspecialchars($data);//fungsi htmlspecialchars() untuk mengubah karakter-karakter khusus html seperti < menjadi &lt; dan > menjadi &gt;
  return $data;
}
?>