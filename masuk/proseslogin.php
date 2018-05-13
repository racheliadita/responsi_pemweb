<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $pass = $_POST['password'];
    if (empty($username)){
      echo "<script>alert('Username belum diisi!')</script>";
      echo "<meta http-equiv='refresh' content='1 url=login.php'>";
    }else if (empty($pass)){
      echo "<script>alert('Password belum diisi!')</script>";
      echo "<meta http-equiv='refresh' content='1 url=login.php'>";
    }else{
      session_start();
        $sql = "SELECT * FROM user WHERE username = '$username' AND password='$pass'";
        $query = $db->query($sql);
        $hasil = $query->fetch_assoc();
      if($query->num_rows == 0) {
            echo "<script>alert('Username atau Password salah!')</script>";
            echo "<meta http-equiv='refresh' content='1 url=login.php'>";
      } else {
            $_SESSION['username'] = $hasil['username'];
            header('location:index.php');
     }
   }
?>