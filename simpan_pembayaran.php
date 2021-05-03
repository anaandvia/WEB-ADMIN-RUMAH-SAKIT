<?php 
include 'koneksi.php';
$PembayaranID = $_POST['PembayaranID'];
$PemeriksaanID = $_POST['PemeriksaanID'];
$Jumlah= $_POST['Jumlah'];
$CaraPembayaran = $_POST['CaraPembayaran'];
$Tanggal = $_POST['Tanggal'];
$input = mysqli_query($koneksi,"INSERT INTO pembayaran VALUES('$PembayaranID','$PemeriksaanID','$Jumlah','$CaraPembayaran','$Tanggal')") ;
if($input){
    echo "Data Berhasil Disimpan";
        header("location:pembayaran.php");
}else{
    echo "Gagal Disimpan";
}
?>