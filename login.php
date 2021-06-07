<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "edu_covid");

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
	$row = mysqli_num_rows($sql);

	if (!$row) {
		echo "<script>
				alert('Anda belum terdaftar!');
			</script>";
	} else {
		$_SESSION["login"] = true;

		$fetch_password = mysqli_fetch_assoc($sql);
		$cek_password = $fetch_password["password"];

		if ($cek_password !== $password) {
			echo "<script>
					alert('Pasword salah!');
				</script>";
		} else {
			header("location: index.php");
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width scale=1">
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="signup-and-login">

<div class="login-container">
	<h1>Log in</h1>
	<form action="" method="post">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td><label for="username">Username</label></td>
				<td><input type="text" name="username" id="username" required></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td><input type="password" name="password" id="password" required></td>
			</tr>
			<tr>
				<td colspan="2"><a href="signup.php" style="color: black; font-size: 9px; margin-left: 72%;">tidak punya akun?</a></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" name="login">Log in</button></td>
			</tr>
		</table>
	</form>
</div>

</body>
</html>