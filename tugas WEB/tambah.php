<?php
require 'koneksi.php';
if (isset ($_POST['simpan'])){

	$Nim = htmlentities(strip_tags(trim($_POST['txtnim'])));
	$Nama = htmlentities(strip_tags(trim($_POST['txtnama'])));
	$Alamat = htmlentities(strip_tags(trim($_POST['txtalamat'])));

	$Nim = mysqli_real_escape_string($link, $Nim);
	$Nama = mysqli_real_escape_string($link, $Nama);
	$Alamat = mysqli_real_escape_string($link, $Alamat);

	$query = "INSERT INTO tabel_gajil VALUES (NULL, '$Nim', '$Nama', '$Alamat')";
	$hasil_query = mysqli_query($link, $query);

	if ($hasil_query){
		header('localhost:indexs.php');
	}else{
		die("Query Error : " . mysqli_error($link));
	}


}
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{
			background-image: url(y.jpg);
		}
		label{
			display:block;
			margin-top:25px;

		}

		input {
			display:block;
			background-color: blue;
			margin-left: 50px;
			margin-top:5px;
		}
		textarea{
			background-color: blue;
			margin-left:  50px;
			margin-top:5px;

		}
		.simpan{
			
			background-color: white;
			margin-top: 30px;
			
		}
		label{
			margin-left: 50px;
		}	
	</style>
		
</head>
<body>
	<h2 align="center"> Tambah data </h2>

	<hr>
	<form action="" method="post" >
		<label for="Nim">Nim</label>
		<input type="text" name="txtnim" id ="Nim" align="center" >

		<label for="Nama">Nama</label>
		<input type="text" name="txtnama" id ="Nama" >

		<label for="Alamat">Alamat</label>
		<textarea name="txtalamat" id="Alamat" cols="100" rows="3"></textarea>

		<input class="simpan" type="submit" value="Simpan" name="simpan">


</body>
</html>