<?php
// include database connection file
include 'koneksi.php';
echo $ObatID = $_POST['datadel'];
echo $sql = "DELETE FROM obat WHERE ObatID ='$ObatID'";
mysqli_query($koneksi,$sql );

header("Location:obat.php");

?>