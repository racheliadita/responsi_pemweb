<?php
   include "koneksi.php";
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);

   if($query->num_rows != 0) {
      echo "<script>alert('Username sudah terdaftar!')</script>";
      echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
   } else {
     if(!$username || !$pass) {
      echo "<script>alert('Masih ada data yang belum diisi!')</script>";
      echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
     } else {
       $data = "INSERT INTO user VALUES (NULL, '$username', '$pass')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<script>alert('Pendaftaran sukses!')</script>";
        echo "<meta http-equiv='refresh' content='1 url=login.php'>";
       } else {
         echo "<script>alert('Pendaftaran gagal!')</script>";;
       }
     }
   }
?>