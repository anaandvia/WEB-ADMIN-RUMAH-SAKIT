<?php
// include database connection file
include 'koneksi.php';
echo $PemeriksaanID = $_POST['datadel'];
echo $sql = "DELETE FROM pemeriksaan WHERE PemeriksaanID ='$PemeriksaanID'";
mysqli_query($koneksi,$sql );

header("Location:pemeriksaan.php");

?>