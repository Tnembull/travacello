<?php 
// koneksi database
include "../config/koneksi.php";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $durasi = $_POST['duration'];
    $itinerary = $_POST['itinerary'];
    $detail = $_POST['detail'];
    $terms = $_POST['terms'];
    $harga = $_POST['harga'];
    $folder = '../assets/img/';
    $gambar = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];     
	move_uploaded_file($source,$folder.$gambar);
    $sql = "INSERT INTO tour VALUES (NULL,'$nama','$durasi','$itinerary','$detail','$terms','$gambar','$harga')";
		if (mysqli_query($kon, $sql)) {
			header("location:paketwisata.php");
		}
		else {
		echo "Error: " . $sql . "" . mysqli_error($kon);
	 }
}	    
?>