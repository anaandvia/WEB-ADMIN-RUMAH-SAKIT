<?php
// include database connection file
include 'koneksi.php';
$DokterID= $_POST['DokterID'];
$Nama=$_POST['Nama'];
$Spesialis=$_POST['Spesialis'];
$NoTelp=$_POST['NoTelp'];
$result = mysqli_query($koneksi, "UPDATE dokter SET DokterID= '$DokterID',Nama='$Nama',Spesialis='$Spesialis',NoTelp='$NoTelp' WHERE DokterID='$DokterID'");
// Redirect to homepage to display updated user in list
header("Location: dokter.php");
?>