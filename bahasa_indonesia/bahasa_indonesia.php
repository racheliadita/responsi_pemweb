<html>
<head>
	<title>Menu CRUD</title>
	<link rel="stylesheet" type="text/css" href="indostyle.css">
</head>
<body>

<div class="head">
        <h1><b>Nilai Mata Pelajaran Bahasa Indonesia<b></h1>
</div>

<form class="form" action = "" method = "POST">
	<table align = "center" cellspacing = "0" cellpadding = "5" border="0px">
		<tr>
			<td colspan="4"><button formaction="../masuk/index.php">Home</button> </td>
			<td colspan="4"><button formaction="../bahasa_indonesia/tambah.php">Tambah Data</button></td>
		</tr>
		<tr>
			<td colspan="4"> </td>
			<td colspan="4"> </td>
		</tr>
		<tr>
			<td>ID</td>
			<td>NIS</td>
			<td>NAMA</td>
			<td>KELAS</td>
			<td>NILAI</td>
			<td colspan="2">OPSI</td>
			<td> </td>
		</tr>

<?php
	include 'config.php';
	$view = $dbconnect -> query ("SELECT * FROM indonesia");
	while($row=$view->fetch_array())
	{
?>
	<tr>
		<td> <?php echo $row['id']; ?> </td>
		<td> <?php echo $row['nis']; ?> </td>
		<td> <?php echo $row['nama']; ?> </td>
		<td> <?php echo $row['kelas']; ?> </td>
		<td> <?php echo $row['nilai']; ?> </td>

		
			<td colspan="2"><button formaction="edit.php?edit=<?php echo $row['id']; ?>">Edit</button></td>
			<td><button formaction="delete.php?del=<?php echo $row['id']; ?>">Hapus</button></td>
	
	</tr>

	<?php
	}
	?>
	</table>
</form>
</body>
</html>
