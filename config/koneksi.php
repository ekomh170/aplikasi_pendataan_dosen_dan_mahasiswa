<?php 
	
	$koneksi = mysqli_connect("localhost", "root", "", "db_pendataan_dosen");

	if (!$koneksi) {
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

 ?>