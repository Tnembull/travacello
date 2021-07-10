<?php
session_start();
include "../config/koneksi.php";
$id = $_POST['id'];
$nop = $_POST['nop'];
$date = $_POST['datepicker'];
$id_user=$_SESSION["id_user"];
$newDate = date("Y-m-d", strtotime($date));
$sql = "INSERT INTO booking VALUES (NULL,'$id','$id_user','$newDate','$nop','0')";
		if (mysqli_query($kon, $sql)) {
			header("location:index.php");
		}
		else {
		echo "Error: " . $sql . "" . mysqli_error($kon);
	 }

    ?>


