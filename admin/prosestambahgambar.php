<?php 
    // koneksi database
    include "../config/koneksi.php";
    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $folder = '../assets/img/gallery/';
        $nama = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];     
        move_uploaded_file($source,$folder.$nama);
        $sql = "INSERT INTO gambar VALUES (NULL,'$nama','$judul',NOW(),1)";
            if (mysqli_query($kon, $sql)) {
                header("location:lihatgambar.php");
            }
            else {
            echo "Error: " . $sql . "" . mysqli_error($kon);
            }      
    }	    
?>