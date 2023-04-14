<!DOCTYPE html>
<html>
<head>
	<title>Biodata Saya</title>
	<style>
		body {
			background-color: #ff9ebd;
			font-family: Italic, sans-serif;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 8px;
			text-align: left;
			background-color: #fff;
		}
		th {
			background-color: #facfdd;
		}
	</style>
</head>
<body>
	<h1 style="color: #ffffff;">Biodata Saya</h1>
	<?php
		$name = "Dela Dewi Puspita";
		$age = 20;
		$address = "Jl. Gunung Anyar Jaya III A 06/A";
		$hobbies = array("Membaca buku", "Menonton film", "Bermain game");
		$interests = array("Teknologi", "Kecantikan", "Musik");
		$skills = array(
			array("HTML", 80),
			array("CSS", 70),
			array("Public Speaking", 70),
			array("Firm", 50)
		);
		$education = array(
			array("Universitas UPN", "S1 Sistem Informasi", "2021-2024"),
			array("Universitas UNAIR", "S2 Ilmu Komputer", "2024-2028")
		);
		$experiences = array(
			array("Wardah, Beauty Cosmetics", "System Analyst", "2019-2020"),
			array("Paragon Technology", "Project Manager", "2022-sekarang")
		);
		echo "<table>";
		echo "<tr><th>Nama:</th><td>$name</td></tr>";
		echo "<tr><th>Umur:</th><td>$age tahun</td></tr>";
		echo "<tr><th>Alamat:</th><td>$address</td></tr>";
		echo "<tr><th>Pendidikan:</th><td><ul>";
		foreach($education as $edu) {
			echo "<li>$edu[1] di $edu[0], lulus tahun $edu[2]</li>";
			// Format output dapat diubah sesuai kebutuhan
		}
		echo "</ul></td></tr>";
		echo "<tr><th>Pengalaman Kerja:</th><td><ul>";
		foreach($experiences as $exp) {
			echo "<li>$exp[1] di $exp[0], dari $exp[2]</li>";
			// Format output dapat diubah sesuai kebutuhan
		}
		echo "</ul></td></tr>";
		echo "<tr><th>Hobi:</th><td>" . implode(", ", $hobbies) . "</td></tr>";
		echo "<tr><th>Minat:</th><td>" . implode(", ", $interests) . "</td></tr>";
		echo "<tr><th>Kemampuan:</th><td><ul>";
		foreach($skills as $skill) {
			echo "<li>$skill[0]: $skill[1]%</li>";
		}
		echo "</ul></td></tr>";
		echo "</table>";
	?>
</body>
</html>