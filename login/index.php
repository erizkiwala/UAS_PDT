<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<link rel="stylesheet" type="text/css" href="link.css">
<div align='center'>
  <font color="white">welcome!</font>, <font color="blue"><u><b><h1><?php echo $username;?></font></h1></u></b> <a class="link" href="logout.php"><b><font color= "orange">Logout</b></a>
<body>
<right>
<center><table border = "1px" width="500px" height = "250px" allign="center" style="background-color:orange;"></center>
<body background="backgroundlogin.jpg"> 
<a class="link" href="about us.html"><b><font color= "orange">about us </font> </b> </a> </right>
</body>
</div>
