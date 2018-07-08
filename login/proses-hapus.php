<?php
require_once("koneksi.php");
if(isset($_GET[ID])){
$ID = $_GET[ID];

$ubah = mysql_query("delete from pesanan where ID = '$ID'");

echo"<script>window.alert('Data $ID Sudah Dihapus')
window.location='save.php'</script>";
}
?>