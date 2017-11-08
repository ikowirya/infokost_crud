<?php
	include "koneksi.php";
	
	$namaPemilikKost 	= $_POST['namaPemilikKost'];
	$alamat = $_POST['alamat'];
	
	class emp{}
	
	if (empty($namaPemilikKost) || empty($alamat)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("INSERT INTO kost (id,namaPemilikKost,alamat) VALUES(0,'".$namaPemilikKost."','".$alamat."')");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di simpan";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error simpan Data";
			die(json_encode($response)); 
		}	
	}
?>