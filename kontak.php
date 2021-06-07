<?php
session_start();

if (!isset($_SESSION['login'])) {
	header("location: login.php");
	exit;
}

$conn = mysqli_connect("localhost", "root", "", "edu_covid");

if (isset($_POST["kirim"])) {
	$nama = $_POST["nama"];
	$email = $_POST["email"];
	$pertanyaan = $_POST["pertanyaan"];

	mysqli_query($conn, "INSERT INTO contact(nama, email, pertanyaan) VALUES ('$nama', '$email', '$pertanyaan')");

	echo "<script>
			alert('Pesan sudah terkirim!');
		</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Kontak</title>
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
			<table border="0" cellspacing="0" cellpadding="5" id="kontak">
				<tr>
					<td><label for="nama">Nama</label></td>
					<td><input type="text" name="nama" id="nama" required></td>
				</tr>
				<tr>
					<td><label for="email">Email</label></td>
					<td><input type="email" name="email" id="email" required><br></td>
				</tr>
				<tr>
					<td><label for="pertanyaan">Pertanyaan</label></td>
					<td><textarea name="pertanyaan" id="pertanyaan" required style="resize: none;"></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit" name="kirim">Kirim</button></td>
				</tr>
			</table>
		</form>
	</div>
</content>

</body>
</html>
