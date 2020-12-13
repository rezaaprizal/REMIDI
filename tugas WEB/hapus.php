<?php
if (isset($_GET['kode'])){

	require 'koneksi.php';

	$kode = $_GET['kode'];

	$kode = mysqli_real_escape_string($link, $kode);

	$query = "DELETE FROM tabel_gajil WHERE id_039=$kode";
	$hasil_query = mysqli_query($link, $query);

	if ($hasil_query){
		header('location:indexs.php');
	} else {
		die("Query Error : " . mysqli_error($link));
	}

} else {

	header('location:indexs.php');
}
?>