<?php
 include 'config.php';

 if (isset($_GET['edit']))
 {
  $SQL = $dbconnect->query ("SELECT * FROM indonesia WHERE id=".$_GET['edit']);
  $getRow = $SQL ->fetch_array();
 }
 if(isset($_POST['update']))
{
  $SQL = $dbconnect->prepare("UPDATE indonesia SET nis=?, nama=?, kelas=?, nilai=? WHERE id=?");
  $SQL->bind_param("ssssi",$_POST['nis'],$_POST['nama'],$_POST['kelas'],$_POST['nilai'],$_GET['edit']);
  $SQL->execute();
  header("Location: bahasa_indonesia.php");
}
?>

<html>
    <head>
      <title>Edit Nilai</title>
      <link rel="stylesheet" type="text/css" href="indostyle.css">
    </head>

    <body>

      <div class="head">
        <h1><b>Edit Nilai Mata Pelajaran Bahasa Indonesia<b></h1>
      </div>

    <form class="form" action="" method="POST">
    <table align="center">
      <tr>
        <td><button formaction="../bahasa_indonesia/bahasa_indonesia.php">Back</button></td>
        <td><button formaction="../masuk/index.php">Home</button></td>
      </tr>
       <tr>
        <td>NIS</td>
        <td>:</td>
        <td><input type="text" name="nis" value="<?php if(isset($_GET['edit'])) echo $getRow['nis'];  ?>" /></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?php if(isset($_GET['edit'])) echo $getRow['nama'];  ?>" /></td>
      </tr>
      <tr>
        <td>KELAS</td>
        <td>:</td>
        <td><input type="text" name="kelas" value="<?php if(isset($_GET['edit'])) echo $getRow['kelas'];  ?>" /></td>
      </tr>
      <tr>
        <td>NILAI</td>
        <td>:</td>
        <td><input type="text" name="nilai" value="<?php if(isset($_GET['edit'])) echo $getRow['nilai'];  ?>" /></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td> <?php
              if(isset($_GET['edit']))
              {
            ?>
              <button type="submit" name="update" value="Update" text-align="center">Update</button>
            <?php
              }else{
            ?>

            <?php
              }
            ?>
          </td></td>
      </tr>
    </table>
    </form>
    </body>
</html>