<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width"> 
  <title>Form Pemesanan</title> 
  <link rel="stylesheet" type="text/css" href="markercontoh2.css">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
  <h1><center><font face="comic sans ms">DATA PEMBELI</font></center></h1><br>


<?php
				include "koneksi.php";
				$result = mysql_query("select * from pesanan");
				?>
                <form name="form1" method="post" action="tampil.php">
                <table width="100%" border="4" cellpadding="5" cellspacing="1">
                <tr>
				<th style="width:130px">Judul</th>
                <th style="width:180px">Studio</th>
                <th style="width:130px">Harga</th>
				<th style="width:70px">Tanggal</th>
				<th style="width:70px">Jam</th>
				<th style="width:70px">Kursi</th>
                <th style="width:200px">Aksi</th>
                </tr>
                
                <?php
				include "koneksi.php";

                while ($data = mysql_fetch_array($result)) {
                ?>
            <tr>
				<td><?php echo $data['judul']; ?></td>
                <td><?php echo $data['studio']; ?></td>
                <td><?php echo $data['harga']; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['jam']; ?></td>
				<td><?php echo $data['kursi']; ?></td>
                <td><center><a href="edit-data.php?judul=<?php echo $data['judul']; ?>"><img src="http://localhost/puskesmas/images/ubah.gif" /></a> | <a href="proses-hapus.php?nama=<?php echo $data['judul']; ?>"><img src="http://localhost/puskesmas/images/hapus.png" /></a></center></td>
			</tr>
			<?php
                }
                ?>
				</table></form>
				
				<br><br><br><center><input onClick="location.href='udahpesan.html'" class="tombol" name="beli" type="submit" value="BELI"></center>

</html>