<?php 
	session_start();
	if(!isset($_SESSION["user"])){
		$_SESSION["message"] = TRUE;
		$_SESSION["lanjut"] = "private2.php";
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
		<li><a href="private1.php">Halaman Detail Data 1 </a></li>
		<li>
			<?php 
			if(isset($_SESSION["user"])):
			?>
			<a href="logout.php">Logout</a>
			<?php
			else: 
			?>
			<a href="login.php">Login Admin </a><?php 
			endif;
			?>
		</li>
	</ul>
</div>
<b>RIWAYAT PENDIDIKAN</b>
			<ol type="I">
				<li>SDN Pandian 1</li>
					<ul type="square">
						<li>Tahun 2004 - 2010</li>
					</ul>
				<li>SMPN 2 Sumenep</li>
					<ul type="square">
						<li>Tahun 2010 - 2013</li>
					</ul>
				<li>SMAN 2 Sumenep</li>
					<ul type="square">
						<li>Tahun 2013 - 2016</li>
					</ul>
				<li>Universitas Trunojoyo Madura<i>(proses)</i></li>
					<ul type="square">
						<li>Tahun 2016 - ...</li>
						<li>Website: <a href="http://www.trunojoyo.ac.id/">www.trunojoyo.ac.id</a></li>
						<li>Mata Kuliah yang telah diambil:</li>
						<b>Semester 1</b>
							<ol>
								<li>UNG110 - Bahasa Inggris</li>
								<li>UNG10X - Pendidikan Agama</li>
								<li>TIF161 - Pengantar Informatika</li>
								<li>TIF162 - Algoritma Pemrograman</li>
								<li>TIF163 - Logika Informatika</li>
								<li>TIF164 - Matematika</li>
								<li>TIF165 - Tata Tulis Karya Ilmiah</li>
							</ol>
						<b>Semester 2</b>
							<ol>
								<li>TIK201 - Komputasi Aljabar Linier</li>
								<li>TIK202 - Struktur Data</li>
								<li>TIK203 - Dasar Pemrograman Web</li>
								<li>TIK204 - Organisasi Komputer</li>
								<li>TIK205 - Fisika Informatika</li>
								<li>TIK206 - Statistika</li>
								<li>UNG108 - Kewarganegaraan</li>
							</ol>
						<b>Semester 3</b>
							<ol>
								<li>TIK301 - Matematika Diskrit</li>
								<li>TIK302 - Sistem Basis Data</li>
								<li>TIK303 - Pemrograman Berbasis Objek</li>
								<li>TIK304 - Sistem Operasi</li>
								<li>TIK305 - Rekayasa Multimedia</li>
								<li>TIK306 - Pemrograman Desktop</li>
							</ol>
						<b>Semester 4</b>
							<ol>
								<li>TIK401 - Jaringan Komputer</li>
								<li>TIK402 - Grafika Komputer</li>
								<li>TIK403 - Sistem Informasi</li>
								<li>TIK404 - Bahasa Formal dan Otomata</li>
								<li>TIK405 - Pengelolaan Basis Data</li>
								<li>TIK406 - Komputasi Numerik</li>
								<li>TIK801 - Wawasan Teknologi & Komunikasi</li>
							</ol>
						<b>Semester 5</b>
							<ol>
								<li>TIK304 - Sistem Operasi</li>
								<li>TIK506 -  Interaksi Manusia dan Komputer</li>
								<li>TIK 504 - Strategi Algoritma</li>
								<li>TIK 502 - Penambangan Data</li>
								<li>TIK 501 - APPL</li>
								<li>TIK 703 - Technopreneurship</li>
							</ol>
						<b>Semester 6</b>
							<ol>
								<li>TIK 801 - Biometrika</li>
								<li>TIK 605 - Pengujian Perangkat Lunak</li>
								<li>TIK 604 - Sistem Terdistribusi</li>
								<li>TIK 603 - Kecerdaasan Komputasional</li>
								<li>TIK 601 - Proyek Perangkat Lunak</li>
								<li>UNG 111 - Kuliah Kerja Nyata</li>
							</ol>

					</ul>
			</ol>
</body>
</html>