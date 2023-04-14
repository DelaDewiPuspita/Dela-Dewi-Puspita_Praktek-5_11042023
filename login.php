<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<style>
		body {
			background-color: #f7d3d3;
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #555;
		}
		h2 {
			color: #555;
			text-align: center;
			margin-top: 40px;
		}
		form {
			margin: 0 auto;
			max-width: 400px;
			padding: 20px;
			border: 1px solid #e0e0e0;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #e0e0e0;
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #555;
		}
		input[type="text"],
		input[type="email"] {
			display: block;
			width: 100%;
			padding: 2px;
			margin-bottom: 20px;
			border: 1px solid #e0e0e0;
			border-radius: 3px;
			font-size: 16px;
			color: #555;
		}
		input[type="submit"] {
			background-color: #e91e63;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 3px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.2s ease-in-out;
		}
		input[type="submit"]:hover {
			background-color: #c2185b;
			transition: background-color 0.2s ease-in-out;
		}
	</style>
</head>
<body>
	<h2>Form Login</h2>
	<form method="post" action="login.php">
		<label for="name">Nama:</label>
		<input type="text" id="name" name="name">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email">
		<input type="submit" value="Submit">
	</form>
	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			if(empty($_POST['name']) || empty($_POST['email'])) {
				header("Location: error.php");
				exit();
			} else {
				$name = $_POST['name'];
				$email = $_POST['email'];
				date_default_timezone_set('Asia/Jakarta');
				$date = date('l, d-m-Y H:i:s');
				echo "<h2>Selamat datang, $name!</h2>";
				echo "<p>Email kamu adalah $email.</p>";
				echo "<p>Login pada tanggal $date.</p>";
			}
		}
	?>
</body>
</html>
