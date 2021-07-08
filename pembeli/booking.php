<?php
session_start();
include "../config/koneksi.php";
$id = $_POST['id'];
$id_user=$_SESSION["id_user"];
$sql = "INSERT INTO booking VALUES (NULL,'$id','$id_user',NOW(),'1','0')";
		if (mysqli_query($kon, $sql)) {
			header("location:index.php");
		}
		else {
		echo "Error: " . $sql . "" . mysqli_error($kon);
	 }

    ?>