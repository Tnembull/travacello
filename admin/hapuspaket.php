<?php 
// koneksi database
include "../config/koneksi.php";
$id = $_GET['id'];
mysqli_query($kon,"delete from tour where id='$id'")or die(mysql_error());
 
header("location:paketwisata.php?pesan=hapus");
?>