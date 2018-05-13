<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="head">
        <h1><b>Login<b></h1>
  </div>

  <div class="page">
    <div class="form">
      <form class="login-form" method="post" action="proseslogin.php">
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit" name="login">Login</button>
            <!--input value="Login" type="submit"> 
            <input value="Batal" type="reset"!-->

            <p class="message">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a>
            </p>
      </form>
    </div>
  </div>
  
</body>
</html>