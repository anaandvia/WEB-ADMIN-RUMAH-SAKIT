<?php
// include database connection file
include 'koneksi.php';
$DokterID = $_POST['datadel'];
$sql = "DELETE FROM dokter WHERE DokterID ='$DokterID'";
mysqli_query($koneksi,$sql );

header("Location:dokter.php");

?>