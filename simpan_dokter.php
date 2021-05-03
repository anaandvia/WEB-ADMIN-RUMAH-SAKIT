<?php 
include 'koneksi.php';
$DokterID = $_POST['DokterID'];
$Nama = $_POST['Nama'];
$Spesialis= $_POST['Spesialis'];
$NoTelp = $_POST['NoTelp'];
$input = mysqli_query($koneksi,"INSERT INTO dokter VALUES('$DokterID','$Nama','$Spesialis','$NoTelp')") or die(mysql_error());
if($input){
    echo "Data Berhasil Disimpan";
        header("location:dokter.php");
}else{
    echo "Gagal Disimpan";
}
?>