<!DOCTYPE html>
<html>
<head>
	<title> Form Validasi Dengan PHP </title>
</head>
<body>
	<h1><center>Tugas Pemograman WEB </h1></center>
	<h2><center>Membuat validasi data dengan PHP</h2></center>

	<h4><center> Masukkan Nama Dan Nim Anda :</h4></center>
	<center>
	<form action="validasi.php" method="post">
	<table>
	<tr>
	<td> Nama </td>
	<td><input type="text" name="nama"></td>
	</tr>
	<tr>
	<td> Nim </td>
	<td><input type="text" name="nim"></td>
	<tr>
	<td><input type="submit" name="web"></td>
	</tr></center>
	</center>

	<?php
	if(isset($_GET['nama'])){
		if ($_GET['nama'] == "kosong") {
			echo "<h4 style='color:blue'> NAMA TIDAK BOLEH KOSONG!</h4>";
		}	
	}
	if(isset($_GET['nim'])){
		if ($_GET['nim'] == "kosong") {
			echo "<h4 style='color:blue'> NIM TIDAK BOLEH KOSONG!</h4>";
		}	
	}
	?>
	</tr>
	</table>
</body>
</html>