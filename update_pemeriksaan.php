<?php
// include database connection file
include 'koneksi.php';
$PemeriksaanID= $_POST['PemeriksaanID'];
$PasienID= $_POST['PasienID'];
$DokterID=$_POST['DokterID'];
$ObatID=$_POST['ObatID'];
$FasilitasID=$_POST['FasilitasID'];
$Umur=$_POST['Umur'];
$BeratBadan=$_POST['BeratBadan'];
$Keluhan=$_POST['Keluhan'];
$result = mysqli_query($koneksi, "UPDATE pemeriksaan SET PemeriksaanID='$PemeriksaanID',PasienID='$PasienID',DokterID='$DokterID',ObatID='$ObatID',FasilitasID='$FasilitasID',Umur='$Umur',BeratBadan='$BeratBadan',Keluhan='$Keluhan' WHERE PemeriksaanID ='$PemeriksaanID'");
// Redirect to homepage to display updated user in list
header("Location:pemeriksaan.php");
?>