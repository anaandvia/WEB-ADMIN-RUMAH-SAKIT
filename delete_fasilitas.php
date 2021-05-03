<?php
// include database connection file
include 'koneksi.php';
echo $FasilitasID = $_POST['datadel'];
echo $sql = "DELETE FROM fasilitas WHERE FasilitasID ='$FasilitasID'";
mysqli_query($koneksi,$sql );

header("Location:fasilitas.php");

?>