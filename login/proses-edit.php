<?php
require_once("koneksi.php");

if(isset($_POST['Simpan'])){
$ID= $_POST[ID];	
$Judul= $_POST['Judul']; 
$Studio = $_POST['Studio'];
$Harga = $_POST['Harga'];
$Tanggal = $_POST['Tanggal'];
$Jam = $_POST['Jam'];
$Kursi= $_POST['Kursi'];

$simpan = mysqli_query("update pesanan set Judul = '$Judul', Studio = '$Studio', Harga = '$Harga', Tanggal = '$Tanggal', Jam = '$Jam', Kursi = '$Kursi' where ID = '$ID'");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='save.php'</script>";
}
?>