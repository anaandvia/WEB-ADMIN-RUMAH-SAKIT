<?php
// include database connection file
include 'koneksi.php';
echo $PembayaranID = $_POST['datadel'];
echo $sql = "DELETE FROM pembayaran WHERE PembayaranID ='$PembayaranID'";
mysqli_query($koneksi,$sql );
header("Location:pembayaran.php");
?>