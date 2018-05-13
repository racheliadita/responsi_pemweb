<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html>
<head>
	 <title>Home</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <form>
	<div class="head">
        <h1><b>Selamat Datang, <b><?php echo $username;?> !</b></h1><br>
        <h3>Berikut adalah daftar pelajaran yang diujikan dalam Ujian Nasional:</h3>
  	</div>

  	<div class="form">
  		<table>
  			<div class="table-button">
  			<tr>
  				<td>Mata Pelajaran</td>
  			</tr>
  			<tr>
  				<td><button formaction="../matematika/mtk.php">Matematika</button></td>
  			</tr>
  			<tr>
  				<td><button formaction="../ipa/ipa.php">IPA</button></td>
  			</tr>
  			<tr>
  				<td><button formaction="../bahasa_indonesia/bahasa_indonesia.php">Bahasa Indonesia</button></td>
  			</tr>
  			<tr>
  				<td><button formaction="../bahasa_inggris/bahasa_inggris.php">Bahasa Inggris</button></td>
  			</tr>
  			</div>
  		</table>
  	</div>

	<div class='head'>
   		<div class="logout-button">
   			<b>Ingin logout? <b> <button formaction="../masuk/logout.php"><b>Logout</b></button>	
   		</div>
	</div>
</form>
</body>
</html>

