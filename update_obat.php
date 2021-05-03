<?php
// include database connection file
include 'koneksi.php';
$ObatID= $_POST['ObatID'];
$Nama=$_POST['Nama'];
$JenisObat=$_POST['JenisObat'];
$TglKadarluasa=$_POST['TglKadarluasa'];
$Harga=$_POST['Harga'];
$result = mysqli_query($koneksi, "UPDATE obat SET ObatID='$ObatID',Nama='$Nama',JenisObat='$JenisObat',TglKadarluasa='$TglKadarluasa',Harga='$Harga' WHERE ObatID ='$ObatID'");
// Redirect to homepage to display updated user in list
header("Location:obat.php");
?>