<?php
// include database connection file
include 'koneksi.php';
echo $PendaftaranID = $_POST['datadel'];
echo $sql = "DELETE FROM pendaftaran WHERE pendaftaran.PendaftaranID ='$PendaftaranID'";
mysqli_query($koneksi,$sql);

header("Location:pendaftaran.php");

?>