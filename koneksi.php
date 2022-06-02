<?php
$conn = mysqli_connect('localhost','adminklinik','312010008','klinik_312010008');

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();

} 
?>