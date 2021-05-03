<?php
// include database connection file
include 'koneksi.php';
$FasilitasID= $_POST['FasilitasID'];
$Nama= $_POST['Nama'];
$Harga= $_POST['Harga'];
$result = mysqli_query($koneksi, "UPDATE fasilitas SET FasilitasID='$FasilitasID',Nama='$Nama',Harga='$Harga' WHERE FasilitasID ='$FasilitasID'");
// Redirect to homepage to display updated user in list
header("Location:fasilitas.php");
?>