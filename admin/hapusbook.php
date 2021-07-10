<?php 
// koneksi database
include "../config/koneksi.php";
$id = $_GET['id_book'];
mysqli_query($kon,"delete from booking where `booking`.`id_book`='$id'")or die(mysql_error());
header("location:konfirmasipemesanan.php?pesan=hapus");
?>