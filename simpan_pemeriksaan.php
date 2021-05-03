<?php 
include 'koneksi.php';
$PemeriksaanID = $_POST['PemeriksaanID'];
$PasienID = $_POST['PasienID'];
$DokterID= $_POST['DokterID'];
$ObatID = $_POST['ObatID'];
$FasilitasID = $_POST['FasilitasID'];
$Umur = $_POST['Umur'];
$BeratBadan = $_POST['BeratBadan'];
$Keluhan = $_POST['Keluhan'];
$input = mysqli_query($koneksi,"INSERT INTO pemeriksaan VALUES('$PemeriksaanID','$PasienID','$DokterID','$ObatID','$FasilitasID','$Umur','$BeratBadan','$Keluhan')");
if($input){
    echo "Data Berhasil Disimpan";
        header("location:pemeriksaan.php");
}else{
    echo "Gagal Disimpan";
}
?>