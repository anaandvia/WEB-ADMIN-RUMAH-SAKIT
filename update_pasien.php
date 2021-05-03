<?php
// include database connection file
include 'koneksi.php';
$PasienID= $_POST['PasienID'];
$NoKTP= $_POST['NoKTP'];
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$TglLahir=$_POST['TglLahir'];
$NoTelp=$_POST['NoTelp'];
$RiwayatPenyakit=$_POST['RiwayatPenyakit'];
$result = mysqli_query($koneksi, "UPDATE pasien SET PasienID='$PasienID',NokTP='$NoKTP',Nama='$Nama',Alamat='$Alamat',TglLahir='$TglLahir',NoTelp='$NoTelp',RiwayatPenyakit='$RiwayatPenyakit' WHERE PasienID ='$PasienID'");
// Redirect to homepage to display updated user in list
header("Location:pasien.php");
?>