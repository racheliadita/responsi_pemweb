<?php
	include "config.php";
	$id = $_GET['del'];
	$query = $dbconnect->query("DELETE FROM indonesia WHERE id='$id'");
		if($query){
					header("location:bahasa_indonesia.php");
		}else{
				echo "Data Gagal Dihapus. <a href='index.php'>Kembali ke halaman sebelumnya</a>";
		}
?>
