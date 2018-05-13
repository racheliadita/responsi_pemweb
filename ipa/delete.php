<?php
	include "config.php";
	$id = $_GET['del'];
	$query = $dbconnect->query("DELETE FROM ipa WHERE id='$id'");
		if($query){
					header("location:ipa.php");
		}else{
				echo "Data Gagal Dihapus. <a href='index.php'>Kembali ke halaman sebelumnya</a>";
		}
?>
