<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM pemeriksaan where PemeriksaanID='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['PemeriksaanID']=$data['PemeriksaanID'];
$row['PasienID']=$data['PasienID'];
$row['DokterID']=$data['DokterID'];
$row['ObatID']=$data['ObatID'];
$row['FasilitasID']=$data['FasilitasID'];
$row['Umur']=$data['Umur'];
$row['BeratBadan']=$data['BeratBadan'];
$row['Keluhan']=$data['Keluhan'];

echo json_encode($row);

?>