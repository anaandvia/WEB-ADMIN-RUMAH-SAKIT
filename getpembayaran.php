<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM pembayaran where PembayaranID='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
$row['PembayaranID']=$data['PembayaranID'];
$row['PemeriksaanID']=$data['PemeriksaanID'];
$row['Jumlah']=$data['Jumlah'];
$row['CaraPembayaran']=$data['CaraPembayaran'];
$row['Tanggal']=$data['Tanggal'];

echo json_encode($row);

?>