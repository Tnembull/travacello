<?php 
// koneksi database
include "../config/koneksi.php";
$id = $_GET['id'];
mysqli_query($kon,"delete from gambar where id='$id'")or die(mysql_error());
 
header("location:lihatgambar.php?pesan=hapus");
?>