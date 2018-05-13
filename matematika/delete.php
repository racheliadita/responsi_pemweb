<?php
	include "config.php";
	$id = $_GET['del'];
	$query = $dbconnect->query("DELETE FROM mtk WHERE id='$id'");
		if($query){
					header("location:mtk.php");
		}else{
				echo "Data Gagal Dihapus. <a href='index.php'>Kembali ke halaman sebelumnya</a>";
		}
?>
