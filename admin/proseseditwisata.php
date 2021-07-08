<?php 
// koneksi database
include "../config/koneksi.php";
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$durasi = $_POST['duration'];
$itinerary = $_POST['itinerary'];
$detail = $_POST['detail'];
$terms = $_POST['terms'];
$harga = $_POST['harga'];
$folder = '../assets/img/';
$gambar = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];     
if ($gambar != '') {
    move_uploaded_file($source,$folder.$gambar);
    mysqli_query($kon,"update tour set nama_tour='$nama',duration='$durasi',itinerary='$itinerary',detail='$detail',terms='$terms',gambar='$gambar',pricing='$harga' where `tour`.`id_tour` ='$id'");
    header("location:paketwisata.php");
}else{
    move_uploaded_file($source,$folder.$gambar);
    mysqli_query($kon,"update tour set nama_tour='$nama',duration='$durasi',itinerary='$itinerary',detail='$detail',terms='$terms',pricing='$harga' where `tour`.`id_tour` ='$id'");
    header("location:paketwisata.php");
}
?>