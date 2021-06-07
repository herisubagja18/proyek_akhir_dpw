<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "edu_covid");

function sign_up($data) {
	global $conn;

	$nama_lengkap = $data["nama-lengkap"];
	$email = $data["email"];
	$username = strtolower($data["username"]);
	$password = $data["password"];
	$konfirmasi_password = $data["password-confirm"];

	if ($password !== $konfirmasi_password) {
		echo "<script>
				alert('Konfirmasi password tidak sesuai!');
			</script>";

		return false;
	}

	mysqli_query($conn, "INSERT INTO users(nama_lengkap, email, username, password) VALUES ('$nama_lengkap', '$email', '$username', '$password')");
	
	$affected = mysqli_affected_rows($conn);
	return $affected;
}

// percabangan
if (isset($_POST["sign-up"])) {
	if (sign_up($_POST) > 0) {
		echo "<script>
				alert('Anda telah berhasil sign-up, silahkan login');
			</script>";
	} else {
		echo "<script>
				alert('Anda gagal sign-up!');
			</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width scale=1">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="signup-and-login">

<div class="signup-container">
	<h1>Sign up</h1>
	<form action="" method="post">
		<table border="0" cellspacing="0" cellpadding="4">
			<tr>
				<td><label for="nama-lengkap">Nama Lengkap</label></td>
				<td><input type="text" name="nama-lengkap" id="nama-lengkap" required></td>
			</tr>
			<tr>
				<td><label for="email">Email</label></td>
				<td><input type="email" name="email" id="email" required></td>
			</tr>
			<tr>
				<td><label for="username">Username</label></td>
				<td><input type="text" name="username" id="username" required></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td><input type="password" name="password" id="password" required></td>
			</tr>
			<tr>
				<td><label for="password-confirm">Konfirmasi Password</label></td>
				<td><input type="password" name="password-confirm" id="password-confirm" required></td>
			</tr>
			<tr>
				<td colspan="2"><a href="login.php" style="color: black; font-size: 9px; margin-left: 74%;">sudah punya akun?</a></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" name="sign-up">Sign up</button></td>
			</tr>
		</table>
	</form>
</div>

</body>
</html>