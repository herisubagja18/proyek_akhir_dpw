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
	<script src="js/script.js"></script>
	<title>Kuis</title>
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
		<form action="" method="post">
			<p>1. Apa itu penyakit covid-19?<br>
				<input type="radio" id="a" name="soal1" value="1"><label for="a">penyakit menular yang disebabkan oleh sindrom pernapasan akut coronavirus 2</label><br>
				<input type="radio" id="b" name="soal1" value="0"><label for="b">penyakit paru-paru akibat kuman Mycobacterium tuberculosis</label><br>
				<input type="radio" id="c" name="soal1" value="0"><label for="c">penyakit yang disebabkan oleh salah satu dari empat virus dengue</label><br>
				<input type="radio" id="d" name="soal1" value="0"><label for="d">peradangan paru-paru yang disebabkan oleh infeksi</label><br></p>
			<p>2. Dimanakah penyakit Covid-19 pertama kali ditemukan?<br>
				<input type="radio" id="a-2" name="soal2" value="0"><label for="a-2">Beijing, China</label><br>
				<input type="radio" id="b-2" name="soal2" value="1"><label for="b-2">Wuhan, China</label><br>
				<input type="radio" id="c-2" name="soal2" value="0"><label for="c-2">Kuala Lumpur, Malaysia</label><br>
				<input type="radio" id="d-2" name="soal2" value="0"><label for="d-2">Jakarta, Indonesia</label><br></p>
			<p>3. Kapan pertama kali penyakit ini ditemukan?<br>
				<input type="radio" id="a-3" name="soal3" value="0"><label for="a-3">2021</label><br>
				<input type="radio" id="b-3" name="soal3" value="1"><label for="b-3">2020</label><br>
				<input type="radio" id="c-3" name="soal3" value="0"><label for="c-3">2019</label><br>
				<input type="radio" id="d-3" name="soal3" value="0"><label for="d-3">2018</label><br></p>
			<p>4. Gejala yang sering muncul pada penderita covid adalah?<br>
				<input type="radio" id="a-4" name="soal4" value="0"><label for="a-4">Gatal gatal</label><br>
				<input type="radio" id="b-4" name="soal4" value="0"><label for="b-4">Nyeri otot</label><br>
				<input type="radio" id="c-4" name="soal4" value="0"><label for="c-4">Diare</label><br>
				<input type="radio" id="d-4" name="soal4" value="1"><label for="d-4">Sesak napas</label><br></p>
			<p>5. Berikut ini cara pencegahan covid-19, kecuali<br>
				<input type="radio" id="a-5" name="soal5" value="0"><label for="a-5">Memakai masker</label><br>
				<input type="radio" id="b-5" name="soal5" value="0"><label for="b-5">Menjaga jarak</label><br>
				<input type="radio" id="c-5" name="soal5" value="1"><label for="c-5">Berkerumun</label><br>
				<input type="radio" id="d-5" name="soal5" value="0"><label for="d-5">Mencuci tangan</label><br></p>
			<button type="submit" onclick="check()" class="quiz-button">Submit</button>
		</form>
	</div>
</content>

</body>
</html>