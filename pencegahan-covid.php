<?php
session_start();

if (!isset($_SESSION['login'])) {
	header("location: login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Pencegahan Covid-19</title>
</head>
<body>

<header>
	<div class="container-1">
		<span class="logo">EDU-COVID</span>
		<a href="logout.php"><button type="submit" name="logout" onclick="return confirm('Keluar?');">Log out</button></a>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="pencegahan-covid.php">Pencegahan COVID-19</a></li>
				<li><a href="data-statistik.php">Data dan Statistik</a></li>
				<li><a href="kuis.php">Kuis</a></li>
				<li><a href="kontak.php">Kontak</a></li>
			</ul>
		</nav>
	</div>
</header>

<content>
	<div class="container-2">
		<center><p id="keterangan">5 M (Memakai Masker, Mencuci Tangan, Menjaga Jarak, Menjauhi Kerumunan, Mengurangi Mobilitas).</p></center>
		<p><img src="masker.jpg" id="gambar">
			<img src="cuci-tangan.jpg" id="gambar">
			<img src="jaga-jarak.jpg" id="gambar">
			<img src="menjauhi-kerumunan.jpg" id="gambar">
			<img src="mobilitas.jpg" id="gambar"></p>
	</div>
</content>

</body>
</html>
