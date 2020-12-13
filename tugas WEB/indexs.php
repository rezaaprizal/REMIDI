<?php
require "koneksi.php";
$query = "select * from tabel_gajil";
$result = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<style>
		body{
			background-image: url(y.jpg);
		}
		table{
			background-color: white;
			margin-top: 50px;

		}
		div{
			display: inline-block;
			width: 100px;
			height: 20px;
			background-color: skyblue;
			text-align: center;
			color: white;
			margin-left: 30px;
			margin-top: 20px;

		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Data Ganjil</title>
	
</head>
<body>
	<h2 align ="center">Data Ganjil</h2>
	<hr>
	<div>
		<a href ="tambah.php">Tambah Data</a>
	</div>
	

	<table border ="1" width ="85%" align ="center">
		<thead>
			<ter>
				<th>id_039</th>
				<th>Nim_039</th>
				<th>Nama_039</th>
				<th>Alamat_039</th>
				<th>Aksi_039</th>
			</ter>
		</thead>
		<tbody align ="center">
			<?php
			$id = 1;
				while ($data = mysqli_fetch_assoc($result)){
			?>
				<tr>
					<td> <?php echo $id++; ?></td>
					<td> <?php echo $data['nim_039'] ?></td>
					<td> <?php echo $data['nama_039'] ?></td>
					<td> <?php echo $data['alamat_039'] ?></td>

					<td>
						<a href ="hapus.php?kode=<?php echo $data['id_039']; ?>">Hapus</a>
						<a href ="update.php?id_039=<?php echo $data['id_039']; ?>">Update</a>
					</td>
				</tr>
			<?php

			}
			?>

		</tbody>
	</table>
</body>
</html>