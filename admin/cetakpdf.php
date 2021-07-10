<?php
include "../vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();
?>
<style>
table, th, td {
  border: 1px solid black;
}
</style>


<h2>Laporan Transaksi</h2>
<table>
<tr>
<th>No</th>
<th>Destinasi Tour</th>
<th>Nama Pemesan</th>
<th>Tanggal</th>
<th>Jumlah Orang</th>
<th>Total</th>
</tr>
<?php

include "../config/koneksi.php";
$data = mysqli_query($kon,"SELECT a.id_book, b.nama_tour, c.nama, a.departure_date, a.nop, a.konfirmasi, b.pricing  FROM booking a, tour b, users c WHERE a.id_tour = b.id_tour AND a.id_user = c.id_user");
$no = 1;
if(mysqli_num_rows($data) > 0){
    while($d = mysqli_fetch_array($data))
        {?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d["nama_tour"]; ?></td>
<td><?php echo $d["nama"]; ?></td>
<td><?php echo $d["departure_date"]; ?></td>
<td><?php echo $d["nop"]; ?> Orang</td>
<td>Rp. <?php echo $d["nop"] * $d["pricing"]; ?></td>
</tr>
<?php }
} ?>
</table>

<!-- Data -->
<?php
$html = ob_get_contents();
$mpdf->WriteHTML(utf8_decode($html));
$mpdf->Output("Data Laporan","I");
exit;
?>



