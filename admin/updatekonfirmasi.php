<?php
$id = $_GET['id_book'];
include "../config/koneksi.php";
mysqli_query($kon,"UPDATE `booking` SET `konfirmasi` = '1' WHERE `booking`.`id_book` = $id");
header("location:konfirmasipemesanan.php");
?>