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
		<ol>
			<li>Menggunakan masker pada saat pandemi COVID-19 merupakan hal yang wajib dipakai terutama ketika bepergian keluar rumah. Masker menjadi hal yang esensial karena mampu menangkal virus ataupun bakteri yang akan masuk ke mulut ataupun hidung seseorang.</li>
			<li>Virus Covid-19 (SARS-CoV-2) bisa berada di mana saja, menempel di benda-benda yang ada di sekitar kita. Cara yang paling efektif untuk mencegah penularan virus tersebut adalah dengan sering mencuci tangan pakai sabun.</li>
			<li>Data yang dimiliki pemerintah, sebaran droplet sejauh 1 meter dan dapat menempel pada benda sekitar. Oleh karenanya mereka yang berjarak kurang dari 1 meter dan memegang benda yang terpapar droplet kemudian tangan yang sudah tersemar menyentuh area wajah, sangat memungkinkan terjadinya penularan.</li>
			<li>Orang dapat tertular COVID-19 dari orang lain yang terinfeksi virus ini. COVID-19 dapat menyebar terutama dari orang ke orang melalui percikan-percikan dari hidung atau mulut yang keluar saat orang yang terinfeksi COVID-19 batuk, bersin atau berbicara. Maka dari itu kita harus hindari kerumunan.</li>
			<li>Jika tidak ada keperluan yang mendesak, tetaplah berada di rumah. Meski sehat dan tidak ada gejala penyakit, belum tentu Anda pulang ke rumah dengan keadaan yang masih sama.</li>
		</ol>
		<p><img src="masker.jpg" id="gambar">
			<img src="cuci-tangan.jpg" id="gambar">
			<img src="jaga-jarak.jpg" id="gambar">
			<img src="menjauhi-kerumunan.jpg" id="gambar">
			<img src="mobilitas.jpg" id="gambar"></p>
	</div>
</content>

</body>
</html>
