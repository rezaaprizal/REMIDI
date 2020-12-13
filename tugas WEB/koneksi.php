<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db	  = 'uas_ganjill';

$link = mysqli_connect($host, $user, $pass, $db);

if (!$link){
	die("maaf!koneksi gagal - " . mysqli_connect_error());
}
?>