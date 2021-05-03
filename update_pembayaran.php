<?php
// include database connection file
include 'koneksi.php';
$PembayaranID= $_POST['PembayaranID'];
$PemeriksaanID= $_POST['PemeriksaanID'];
$Jumlah= $_POST['Jumlah'];
$CaraPembayaran= $_POST['CaraPembayaran'];
$Tanggal= $_POST['Tanggal'];
$result = mysqli_query($koneksi, "UPDATE pembayaran SET PembayaranID='$PembayaranID',PemeriksaanID='$PemeriksaanID',Jumlah='$Jumlah',CaraPembayaran='$CaraPembayaran',Tanggal='$Tanggal' WHERE PembayaranID ='$PembayaranID'");
// Redirect to homepage to display updated user in list
header("Location:pembayaran.php");
?>