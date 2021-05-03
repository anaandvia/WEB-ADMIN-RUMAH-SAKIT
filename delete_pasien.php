<?php
// include database connection file
include 'koneksi.php';
echo $PasienID = $_POST['datadel'];
echo $sql = "DELETE FROM pasien WHERE PasienID ='$PasienID'";
mysqli_query($koneksi,$sql );

header("Location:pasien.php");

?>