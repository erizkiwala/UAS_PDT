<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width"> 
  <title>Form Pemesanan</title> 
  <link rel="stylesheet" type="text/css" href="editdata.css">
</head>

<body>
  <h1><center>UBAH PEMESANAN</center></h1>

<body> 
<?php
include "koneksi.php";
$ID = $_GET[ID];
$result = mysql_query("select * from pesanan where ID ='$ID'");
$data = mysql_fetch_array($result);
?>

<form name="form1" method="post" action="proses-edit.php">
		<div id="kotak" style="width:40%;">
		  <tr>
			<td>Judul</td>
			<td><input class= "masuk" name="judul" type="text" size="40" value="<?php echo $data['Judul']; ?>"</td>
		  </tr>
		  
		  <tr>
			<td>Studio</td>
			<td><input class= "masuk" name="studio" type="text" size="40" value="<?php echo $data['Studio']; ?>"></td>
		  </tr>
		
		<tr>
		<td>Harga</td>
		<td><input class= "masuk" name="harga" type="text" size="40" value="<?php echo $data['Harga']; ?>"></td>
		</tr>
		
		<tr>
		<td>Tanggal</td>
		<td><input class= "masuk" name="tanggal" type="text" size="40" value="<?php echo $data['Tanggal']; ?>"></td>
		</tr>
		
		<tr>
		<td>Jam</td>
		<td><input class= "masuk" name="jam" type="text" size="40" value="<?php echo $data['Jam']; ?>"></td>
		</tr>
		
		<tr>
		<td>Kursi</td>
		<td><input class= "masuk" name="kursi" type="text" size="40" value="<?php echo $data['Kursi']; ?>"></td>
		</tr>
		
		<form>
		<td>METODE PEMBAYARAN</td></br></br>
		<input type="radio" name="metode" value="<?php echo $data['metode']; ?>">Tunai</br></br>
		<input type="radio" name="metode" value="<?php echo $data['metode']; ?>">e-banking</br>
	</form></br>
		
			  <tr>
			<td></td>
			<td><input class= "tombol" name="simpan" type="submit" value="Simpan"></td>
		  </tr>
		</div
		
		</form>
</body> 

</html>