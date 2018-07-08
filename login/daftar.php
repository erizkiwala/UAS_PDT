<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>
<div align='center'>
  <form action="prosesdaftar.php" method="post">
  <table
    border = "0px" width="500px" height = "250px" allign="center" style="background-color:grey;">
  <tbody>
  <body background="backgroundlogin.jpg">
<link rel="stylesheet" type="text/css" href="link.css">
<form>
<style type="text/css">

</style>
</form>
      <marquee><font color="white"> Isi Data Dengan Benar dan Sesuai </font></marquee>
  <colspan="2" align="center"><h1><font color="#FF8C00 ">Sign Up</h1>
  <tr><td><font color ="#FF8C00"> Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td><font color ="#FF8C00"> Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="center"><input value="Register" type="submit"> <input value="Cancel" type="reset"></td></tr>
  <tr><td colspan="2" align="center"><h1 class="pp" font color="black"> Sudah Punya Akun? <a class="link" href="login.php"><b>Login</h1></b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>