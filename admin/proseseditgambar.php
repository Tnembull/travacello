<?php 
// koneksi database
include "../config/koneksi.php";
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$folder = '../assets/img/gallery/';
$nama = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];    
if ($nama != '') {
    move_uploaded_file($source,$folder.$nama);
    mysqli_query($kon,"update gambar set nama_file='$nama',judul='$judul' where `gambar`.`id` ='$id'");
    header("location:lihatgambar.php");
}else{
    move_uploaded_file($source,$folder.$nama);
    mysqli_query($kon,"update gambar set judul='$judul' where `gambar`.`id` ='$id'");
    header("location:lihatgambar.php");
}
?>