<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width"> 
  <title>Halaman Login</title>
</head>

<div align='center'>
  <form action="cek_login.php" method="post">
     <marquee> <font color ="white">Selamat Datang di Website ini.</font></marquee>
     <body background="backgroundlogin.jpg">
<link rel="stylesheet" type="text/css" href="link.css">
  <h1><font color="orange">Login</font> </h1>
  <table border = "0px" width="500px" height = "250px" allign="center" style="background-color:grey;">
  <tbody>
  <tr><td> <b><font color="orange">Username</font></b> </td><td> : <input name="username" type="text"></td></tr>
  <tr><td><b><font color="orange">Password</font></b></td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="center"><input value="Login" type="submit"> <input value="Cancel" type="reset"></td></tr>
  <tr><td colspan="2" align="center"><h1 class="pp" href="teks.css">Belum Punya Akun ? <a class="link" href="daftar.php"><b>Sign Up</h1></b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>