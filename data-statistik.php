<?php
session_start();

if (!isset($_SESSION['login'])) {
	header("location: login.php");
	exit;
}

$conn = mysqli_connect("localhost", "root", "", "edu_covid");
$data = mysqli_query($conn, "SELECT * FROM data_statistik");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Data dan Statistik</title>
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
		<center>
			<table cellspacing="0" cellpadding="5">
				<thead>
					<th id="kolom">Positif</th>
					<th id="kolom">Sembuh</th>
					<th id="kolom">Meninggal</th>
				</thead>
				<tbody>
					<?php foreach($data as $data_covid): ?>
						<td id="kolom"><?= $data_covid["positif"]; ?></td>
						<td id="kolom"><?= $data_covid["sembuh"]; ?></td>
						<td id="kolom"><?= $data_covid["meninggal"]; ?></td>
					<?php endforeach; ?>
				</tbody>
			</table>

			<center>
				<p style="font-family: arial;">Data pada tanggal <?php echo date("l, d - F - Y"); ?></p>
			</center>
		</center>
	</div>
</content>

</body>
</html>