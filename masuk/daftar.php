<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="head">
    <h1><b>Sign Up<b></h1>
  </div>

  <div class="page">
    <div class="form">
      <form class="register-form" method="post" action="prosesdaftar.php" >
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <button type="submit" name="signup">Sign Up</button>
        <!--input value="Daftar" type="submit"> <input value="Batal" type="reset"!-->

       <p class="message">Sudah Punya akun ? <a href="login.php"><b>Login</b></a>
       </p>
  </form>
</div>
</div>

</body>
</html>