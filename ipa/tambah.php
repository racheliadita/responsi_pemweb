<html>
<head>
	<title>Silahkan Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="ipastyle.css">
</head>
<body>
	<div class="head">
        <h1><b>Input Nilai Mata Pelajaran IPA<b></h1>
	</div>

	<form class="form" action="" method="POST">
		<table align="center">
			<tr>
				<td><button formaction="../ipa/ipa.php">Back</button></td>
				<td><button formaction="../masuk/index.php">Home</button></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td> <input type="text" name="nis" placeholder="Masukan NIS"> </td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td> <input type="text" name="nama" placeholder="Masukan Nama"> </td>
			</tr>
			<tr>
				<td>KELAS</td>
				<td>:</td>
				<td> <input type="text" name="kelas" placeholder="Masukan Kelas"> </td>
			</tr>
			<tr>
				<td>NILAI</td>
				<td>:</td>
				<td> <input type="text" name="nilai" placeholder="Masukan Nilai"> </td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td> <button type="submit" name="simpan" value="Simpan">Simpan</button></td>
			</tr>
		</table>
	</form>

</body>
</html>

<?php
	include 'config.php';
	if (isset($_POST['simpan']))
	{
		$nis = $dbconnect -> real_escape_string($_POST['nis']);
		$nama = $dbconnect -> real_escape_string($_POST['nama']);
		$kelas = $dbconnect -> real_escape_string($_POST['kelas']);
		$nilai = $dbconnect -> real_escape_string($_POST['nilai']);

		$SQL = $dbconnect -> prepare ("INSERT INTO ipa (id,nis,nama,kelas,nilai) VALUES (?,?,?,?,?)");
		$SQL -> bind_param("sssss",$id,$nis,$nama,$kelas,$nilai);
		$SQL -> execute();

			if(!$SQL)
				{
					echo $mysqliconn -> error;
				}
					header("location: ipa.php");
				}
?>
